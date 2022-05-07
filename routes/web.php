<?php	

use Illuminate\Support\Facades\Route;	
use App\Http\Controllers\newentitycontroller;	
use App\Http\Controllers\masterTemplate;	
use App\Http\Controllers\investorController;	
use App\Http\Controllers\PropertyController;	

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



// Entity routing	
Route::get('/add-new-entry', [newentitycontroller ::class, 'index']);	
Route::post('/entity-submit', [newentitycontroller ::class, 'create']);	
Route::get('/entity-list', [newentitycontroller ::class, 'showEntityList']);	

Route::get('entity-delete/{id}', [newentitycontroller ::class, 'delete']);	

Route::get('entity-edit/{id}', [newentitycontroller ::class, 'edit']);	

Route::put('entity-update/{id}', [newentitycontroller ::class, 'update']);	
Route::get('entity-view/{id}', [newentitycontroller::class, 'show']);
Route::get('entity-submit-confirmation/{id}', [newentitycontroller::class, 'confirmation']);

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



/*
 *  Investor Routes
*/
Route::controller(investorController::class)->group(function () {
    Route::get('/investor-list', 'index');	
    Route::get('/investor-view/{id}', 'show');	
    Route::get('investor-edit/{id}', 'edit');	
    Route::put('investor-update/{id}','update');
    Route::get('investor-delete/{id}', 'delete');
    Route::get('investor-submit-confirmation/{id}','confirmation');
});