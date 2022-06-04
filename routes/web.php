<?php	

use Illuminate\Support\Facades\Route;	
use App\Http\Controllers\entityController;	
use App\Http\Controllers\masterTemplate;	
use App\Http\Controllers\investorController;	
use App\Http\Controllers\PropertyController;	
use App\Http\Controllers\TestController;
use App\Http\Controllers\EntityShareholdingController;
use App\Http\Controllers\InvestmentController;  
use App\Http\Controllers\EntityPropertiesController;

/*	
|--------------------------------------------------------------------------	
| Web Routes	
|--------------------------------------------------------------------------	
|	
| Here is where you can register web routes for your application. These	
| routes are loaded by the RouteServiceProvider within a group which	
| contains the "web" middleware group. Now create something great!	
|	
);	
*/	

Route::get('/', function () {	
    return view('index');	
});	
Route::get('/test', [TestController ::class, 'index']);

// Entity routing	
Route::get('/add-new-entry', [entityController ::class, 'index']);	
Route::post('/entity-submit', [entityController ::class, 'store']);	
Route::get('/entity-list', [entityController ::class, 'showEntityList']);	
Route::get('entity-delete/{id}', [entityController ::class, 'delete']);	
Route::get('entity-edit/{id}', [entityController ::class, 'edit']);	
Route::put('entity-update/{id}', [entityController ::class, 'update']);	
Route::get('entity-view/{id}', [entityController::class, 'show']);
Route::get('entity-submit-confirmation/{id}', [entityController::class, 'confirmation']);

//New partner registration routing	

// Route::get('/new-partner-registration', [newPartnerRegistrationInd::class, 'index']);	
// Route::post('/new-partner-registration-submit', [newPartnerRegistrationInd ::class, 'create']);	



// Property CRUD Links
Route::get('/add-new-property', [PropertyController::class, 'index'])->name('add-new-property');
Route::post('/property-submit', [PropertyController::class, 'create']);	
Route::get('property-submit-confirmation/{id}', [PropertyController::class, 'confirmation']);
Route::get('property-list-edit/{id}', [PropertyController::class, 'edit']);
Route::put('property-list-update/{id}', [PropertyController::class, 'update']);
Route::get('property-view/{id}', [PropertyController::class, 'show']);
Route::get('property-list', [PropertyController::class, 'show_list']);
Route::get('property-list-delete/{id}', [PropertyController::class, 'delete']);	



// investor CRUD Links

Route::get('/investor-registration', [investorController::class, 'index']);
Route::post('/investor-submit', [investorController::class, 'store']);	
Route::get('investor-submit-confirmation/{id}', [investorController::class, 'confirmation']);
Route::get('investor-edit/{id}', [investorController::class, 'edit']);
Route::put('investor-update/{id}', [investorController::class, 'update']);
Route::get('/investor-view/{id}', [investorController::class, 'show']);
Route::get('/investor-list', [investorController::class, 'showList']);
Route::get('investor-delete/{id}', [investorController::class, 'delete']);	


// Entity Shareholding

Route::get('/entity-shareholding', [EntityShareholdingController ::class, 'index']);
Route::get('entity-shareholding/{id}', [EntityShareholdingController::class, 'delete']);
Route::get('entity-shareholding-edit/{id}', [EntityShareholdingController::class, 'edit']);
Route::put('entity-shareholding-update/{id}', [EntityShareholdingController::class, 'update']);

// investment
Route::get('/entity-newpartner-add', [InvestmentController ::class, 'index']);
Route::get('/entity-newpartner-add-submit', [InvestmentController ::class, 'store']);



// Entity New Partner properties value

Route::post('entity_properties-submit', [EntityPropertiesController::class, 'store']);