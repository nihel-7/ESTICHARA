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
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/user', function () {
    return view('user.home');
});
Route::get('/user/therapeuticrec', function () {
    return view('user.therapeuticrec');
});
Route::get('/user/analysisresult', function () {
    return view('user.analysisresult');
});

Route::get('/user/prescriptionanalysis', function () {
    return view('user.prescriptionanalysis');
});
//------------------------pharmacien
Route::get('/pharmacien', function () {
    return view('pharmacien.home');
});
Route::get('/pharmacien/therapeuticrec', function () {
    return view('pharmacien.therapeuticrec');
});
Route::get('/pharmacien/analysisresult', function () {
    return view('pharmacien.analysisresult');
});
Route::get('/pharmacien/prescriptionanalysis', function () {
    return view('pharmacien.prescriptionanalysis');
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
Route::post('/user/recresult',[RecresultController::class,'getData'])->name('recresult');





//medicationdetail

Route::get('/medicationdetail/{id}/{cat}',[MedicationController::class,'MedInfo'])->name('medicationdetail');












Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
