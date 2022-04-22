<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicationController;
use App\Http\Controllers\PathologyController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AllergieController;
use App\Http\Controllers\MedicamentController;
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

Route::get('/', function () {
    return view('user.home');
});
Route::get('/therapeuticrec', function () {
    return view('user.therapeuticrec');
});
Route::get('/analysisresult', function () {
    return view('user.analysisresult');
});
Route::get('/medicationdetail', function () {
    return view('user.medicationdetail');
});
Route::get('/prescriptionanalysis', function () {
    return view('user.prescriptionanalysis');
});






 Route::get('/listis',function(){
   return view('user.list');
}); 
Route::post('/list',[MedicationController::class,'list'])->name('list');
Route::get('autocompleteM',[MedicationController::class,'autocompleteM'])->name('autocompleteM');
Route::get('autocompleteMF',[MedicationController::class,'autocompleteMF'])->name('autocompleteMF');
Route::controller(SearchController::class)->group(function(){
    Route::get('demo-search', 'index');
    Route::get('autocomplete', 'autocomplete')->name('autocomplete');
    
});

Route::POST('/easy',[SearchController::class,'getpathologyfunction']);
Route::get('autocompleteA',[AllergieController::class,'autocompleteA'])->name('autocompleteA');