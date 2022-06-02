<?php

namespace Illuminate\Tests\Foundation;

use Exception;
use Illuminate\Config\Repository as Config;
use Illuminate\Container\Container;
use Illuminate\Contracts\Routing\ResponseFactory as ResponseFactoryContract;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\RecordsNotFoundException;
use Illuminate\Foundation\Exceptions\Handler;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\MessageBag;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Validator;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery as m;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;
use RuntimeException;
use stdClass;
use Symfony\Component\HttpFoundation\Exception\SuspiciousOperationException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\HttpException;

class FoundationExceptionsHandlerTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    protected $config;

    protected $container;

    protected $handler;

    protected $request;

    protected function setUp(): void
    {
        $this->config = m::mock(Config::class);

        $this->request = m::mock(stdClass::class);

        $this->container = Container::setInstance(new Container);

        $this->container->singleton('config', function () {
            return $this->config;
        });

        $this->container->singleton(ResponseFactoryContract::class, function () {
            return new ResponseFactory(
                m::mock(Factory::class),
                m::mock(Redirector::class)
            );
        });

        $this->handler = new Handler($this->container);
    }

    protected function tearDown(): void
    {
        Container::setInstance(null);
    }

    public function testHandlerReportsExceptionAsContext()
    {
        $logger = m::mock(LoggerInterface::class);
        $this->container->instance(LoggerInterface::class, $logger);
        $logger->shouldReceive('error')->withArgs(['Exception message', m::hasKey('exception')])->once();

        $this->handler->report(new RuntimeException('Exception message'));
    }

    public function testHandlerCallsContextMethodIfPresent()
    {
        $logger = m::mock(LoggerInterface::class);
        $this->container->instance(LoggerInterface::class, $logger);
        $logger->shouldReceive('error')->withArgs(['Exception message', m::subset(['foo' => 'bar'])])->once();

        $this->handler->report(new ContextProvidingException('Exception message'));
    }

    public function testHandlerReportsExceptionWhenUnReportable()
    {
        $logger = m::mock(LoggerInterface::class);
        $this->container->instance(LoggerInterface::class, $logger);
        $logger->shouldReceive('error')->withArgs(['Exception message', m::hasKey('exception')])->once();

        $this->handler->report(new UnReportableException('Exception message'));
    }

    public function testHandlerCallsReportMethodWithDependencies()
    {
        $reporter = m::mock(ReportingService::class);
        $this->container->instance(ReportingService::class, $reporter);
        $reporter->shouldReceive('send')->withArgs(['Exception message'])->once();

        $logger = m::mock(LoggerInterface::class);
        $this->container->instance(LoggerInterface::class, $logger);
        $logger->shouldNotReceive('error');

        $this->handler->report(new ReportableException('Exception message'));
    }

    public function testHandlerReportsExceptionUsingCallableClass()
    {
        $reporter = m::mock(ReportingService::class);
        $reporter->shouldReceive('send')->withArgs(['Exception message'])->once();

        $logger = m::mock(LoggerInterface::class);
        $this->container->instance(LoggerInterface::class, $logger);
        $logger->shouldNotReceive('error');

        $this->handler->reportable(new CustomReporter($reporter));

        $this->handler->report(new CustomException('Exception message'));
    }

    public function testReturnsJsonWithStackTraceWhenAjaxRequestAndDebugTrue()
    {
        $this->config->shouldReceive('get')->with('app.debug', null)->once()->andReturn(true);
        $this->request->shouldReceive('expectsJson')->once()->andReturn(true);

        $response = $this->handler->render($this->request, new Exception('My custom error message'))->getContent();

        $this->assertStringNotContainsString('<!DOCTYPE html>', $response);
        $this->assertStringContainsString('"message": "My custom error message"', $response);
        $this->assertStringContainsString('"file":', $response);
        $this->assertStringContainsString('"line":', $response);
        $this->assertStringContainsString('"trace":', $response);
    }

    public function testReturnsCustomResponseFromRenderableCallback()
    {
        $this->handler->renderable(function (CustomException $e, $request) {
            $this->assertSame($this->request, $request);

            return response()->json(['response' => 'My custom exception response']);
        });

        $response = $this->handler->render($this->request, new CustomException)->getContent();

        $this->assertSame('{"response":"My custom exception response"}', $response);
    }

    public function testReturnsCustomResponseFromCallableClass()
    {
        $this->handler->renderable(new CustomRenderer);

        $response = $this->handler->render($this->request, new CustomException)->getContent();

        $this->assertSame('{"response":"The CustomRenderer response"}', $response);
    }

    public function testReturnsCustomResponseWhenExceptionImplementsResponsable()
    {
        $response = $this->handler->render($this->request, new ResponsableException)->getContent();

        $this->assertSame('{"response":"My responsable exception response"}', $response);
    }

    public function testReturnsJsonWithoutStackTraceWhenAjaxRequestAndDebugFalseAndExceptionMessageIsMasked()
    {
        $this->config->shouldReceive('get')->with('app.debug', null)->once()->andReturn(false);
        $this->request->shouldReceive('expectsJson')->once()->andReturn(true);

        $response = $this->handler->render($this->request, new Exception('This error message should not be visible'))->getContent();

        $this->assertStringContainsString('"message": "Server Error"', $response);
        $this->assertStringNotContainsString('<!DOCTYPE html>', $response);
        $this->assertStringNotContainsString('This error message should not be visible', $response);
        $this->assertStringNotContainsString('"file":', $response);
        $this->assertStringNotContainsString('"line":', $response);
        $this->assertStringNotContainsString('"trace":', $response);
    }

    public function testReturnsJsonWithoutStackTraceWhenAjaxRequestAndDebugFalseAndHttpExceptionErrorIsShown()
    {
        $this->config->shouldReceive('get')->with('app.debug', null)->once()->andReturn(false);
        $this->request->shouldReceive('expectsJson')->once()->andReturn(true);

        $response = $this->handler->render($this->request, new HttpException(403, 'My custom error message'))->getContent();

        $this->assertStringContainsString('"message": "My custom error message"', $response);
        $this->assertStringNotContainsString('<!DOCTYPE html>', $response);
        $this->assertStringNotContainsString('"message": "Server Error"', $response);
        $this->assertStringNotContainsString('"file":', $response);
        $this->assertStringNotContainsString('"line":', $response);
        $this->assertStringNotContainsString('"trace":', $response);
    }

    public function testReturnsJsonWithoutStackTraceWhenAjaxRequestAndDebugFalseAndAccessDeniedHttpExceptionErrorIsShown()
    {
        $this->config->shouldReceive('get')->with('app.debug', null)->once()->andReturn(false);
        $this->request->shouldReceive('expectsJson')->once()->andReturn(true);

        $response = $this->handler->render($this->request, new AccessDeniedHttpException('My custom error message'))->getContent();

        $this->assertStringContainsString('"message": "My custom error message"', $response);
        $this->assertStringNotContainsString('<!DOCTYPE html>', $response);
        $this->assertStringNotContainsString('"message": "Server Error"', $response);
        $this->assertStringNotContainsString('"file":', $response);
        $this->assertStringNotContainsString('"line":', $response);
        $this->assertStringNotContainsString('"trace":', $response);
    }

    public function testValidateFileMethod()
    {
        $argumentExpected = ['input' => 'My input value'];
        $argumentActual = null;

        $this->container->singleton('redirect', function () use (&$argumentActual) {
            $redirector = m::mock(Redirector::class);

            $redirector->shouldReceive('to')->once()
                ->andReturn($responser = m::mock(RedirectResponse::class));

            $responser->shouldReceive('withInput')->once()->with(m::on(
                function ($argument) use (&$argumentActual) {
                    $argumentActual = $argument;

                    return true;
                }))->andReturn($responser);

            $responser->shouldReceive('withErrors')->once()
                ->andReturn($responser);

            return $redirector;
        });

        $file = m::mock(UploadedFile::class);
        $file->shouldReceive('getPathname')->andReturn('photo.jpg');
        $file->shouldReceive('getClientOriginalName')->andReturn('photo.jpg');
        $file->shouldReceive('getClientMimeType')->andReturn(null);
        $file->shouldReceive('getError')->andReturn(null);

        $request = Request::create('/', 'POST', $argumentExpected, [], ['photo' => $file]);

        $validator = m::mock(Validator::class);
        $validator->shouldReceive('errors')->andReturn(new MessageBag(['error' => 'My custom validation exception']));

        $validationException = new ValidationException($validator);
        $validationException->redirectTo = '/';

        $this->handler->render($request, $validationException);

        $this->assertEquals($argumentExpected, $argumentActual);
    }

    public function testSuspiciousOperationReturns404WithoutReporting()
    {
        $this->config->shouldReceive('get')->with('app.debug', null)->once()->andReturn(true);
        $this->request->shouldReceive('expectsJson')->once()->andReturn(true);

        $response = $this->handler->render($this->request, new SuspiciousOperationException('Invalid method override "__CONSTRUCT"'));

        $this->assertEquals(404, $response->getStatusCode());
        $this->assertStringContainsString('"message": "Bad hostname provided."', $response->getContent());

        $logger = m::mock(LoggerInterface::class);
        $this->container->instance(LoggerInterface::class, $logger);
        $logger->shouldNotReceive('error');

        $this->handler->report(new SuspiciousOperationException('Invalid method override "__CONSTRUCT"'));
    }

    public function testRecordsNotFoundReturns404WithoutReporting()
    {
        $this->config->shouldReceive('get')->with('app.debug', null)->once()->andReturn(true);
        $this->request->shouldReceive('expectsJson')->once()->andReturn(true);

        $response = $this->handler->render($this->request, new RecordsNotFoundException);

        $this->assertEquals(404, $response->getStatusCode());
        $this->assertStringContainsString('"message": "Not found."', $response->getContent());

        $logger = m::mock(LoggerInterface::class);
        $this->container->instance(LoggerInterface::class, $logger);
        $logger->shouldNotReceive('error');

        $this->handler->report(new RecordsNotFoundException);
    }
}

class CustomException extends Exception
{
}

class ResponsableException extends Exception implements Responsable
{
    public function toResponse($request)
    {
        return response()->json(['response' => 'My responsable exception response']);
    }
}

class ReportableException extends Exception
{
    public function report(ReportingService $reportingService)
    {
        $reportingService->send($this->getMessage());
    }
}

class UnReportableException extends Exception
{
    public function report()
    {
        return false;
    }
}

class ContextProvidingException extends Exception
{
    public function context()
    {
        return [
            'foo' => 'bar',
        ];
    }
}

class CustomReporter
{
    private $service;

    public function __construct(ReportingService $service)
    {
        $this->service = $service;
    }

    public function __invoke(CustomException $e)
    {
        $this->service->send($e->getMessage());

        return false;
    }
}

class CustomRenderer
{
    public function __invoke(CustomException $e, $request)
    {
        return response()->json(['response' => 'The CustomRenderer response']);
    }
}

interface ReportingService
{
    public function send($message);
}
