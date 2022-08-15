<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Validator;
use App\Http\Controllers\MedicationController;
use App\Http\Controllers\PathologyController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AllergieController;
use App\Http\Controllers\MedicamentController;
use Illuminate\Routing\RouteRegistrar;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Pharmacien\PharmacienController;
use App\Http\Controllers\AnalyseController;
use App\Http\Controllers\RecresultController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//pages
Route::get('/', function () {
    return view('user.home');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/therapeuticrec', function () {
    return view('user.therapeuticrec');
});
Route::get('/analysisresult', function () {
    return view('user.analysisresult');
});

Route::get('/prescriptionanalysis', function () {
    return view('user.prescriptionanalysis');
});






 Route::get('/listis',function(){
   return view('user.list');});

 

//autocomplete
Route::post('/list',[MedicationController::class,'list'])->name('list');
Route::get('autocompleteM',[MedicationController::class,'autocompleteM'])->name('autocompleteM');
Route::get('autocompleteMF',[MedicationController::class,'autocompleteMF'])->name('autocompleteMF');
Route::controller(SearchController::class)->group(function(){
    Route::get('demo-search', 'index')->name('demo-search');
    Route::get('autocomplete', 'autocomplete')->name('autocomplete');
    
});



Route::POST('/easy',[SearchController::class,'getpathologyfunction']);
Route::get('autocompleteA',[AllergieController::class,'autocompleteA'])->name('autocompleteA');
Auth::routes();


//forms
Route::get('/recresulttest',function(){
	return view('user.recresult');
}); 
Route::post('/recresult',[RecresultController::class,'getData'])->name('recresult');



//medicationdetail

Route::get('/medicationdetail/{id}',[MedicationController::class,'MedInfo'])->name('medicationdetail');




///////------------------authentication
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('user')->name('user.')->group(function(){
	Route::middleware(['guest:web'])->group(function(){
		Route::view('/login','user.login')->name('login');
		Route::view('/register','user.register')->name('register');
		Route::Post('/create',[UserController::class,'create'])->name('create');
		Route::Post('/dologin',[UserController::class,'doLogin'])->name('dologin');
	});
	Route::middleware(['auth:web'])->group(function(){
		Route::view('/home','user.home')->name('home');
		Route::Post('/logout',[UserController::class,'logout'])->name('logout');
	});
});
Auth::routes();
// Admin authentication
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->name('admin.')->group(function(){
	Route::middleware(['guest:admin'])->group(function(){
		Route::view('/login','admin.login')->name('login');
		Route::Post('/dologin',[AdminController::class,'doLogin'])->name('dologin');
	});
	Route::middleware(['auth:admin'])->group(function(){
		Route::view('/home','admin.home')->name('home');
		Route::Post('/logout',[AdminController::class,'logout'])->name('logout');
	});
});
// pharmacien authentication
Route::prefix('pharmacien')->name('pharmacien.')->group(function(){
	Route::middleware(['guest:pharmacien'])->group(function(){
		Route::view('/login','pharmacien.login')->name('login');
		Route::view('/register','pharmacien.register')->name('register');
		Route::Post('/create',[PharmacienController::class,'create'])->name('create');
		Route::Post('check',[PharmacienController::class,'check'])->name('check');
	});
    Route::middleware(['auth:pharmacien'])->group(function(){
        Route::view('/home','pharmacien.home')->name('home');
    });
});
///search pathologie

Route::get('/index',[PathologyController::class,'index'])->name('index');
Route::get('/therapeuticrec/action',[PathologyController::class,'action'])->name('therapeuticrec.action');
Route::get('/show_infos/{id}', [App\Http\Controllers\MedicamentController::class, 'show_info'])->name('show_info');



