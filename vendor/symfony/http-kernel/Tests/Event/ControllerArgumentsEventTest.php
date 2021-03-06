<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Tests\Event;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\ControllerArgumentsEvent;
use Symfony\Component\HttpKernel\Tests\TestHttpKernel;

class ControllerArgumentsEventTest extends TestCase
{
    public function testControllerArgumentsEvent()
    {
        $filterController = new ControllerArgumentsEvent(new TestHttpKernel(), function () {}, ['test'], new Request(), 1);
        $this->assertEquals($filterController->getArguments(), ['test']);
    }
}
