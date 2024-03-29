<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Validator;
use App\Http\Controllers\MedicationController;
use App\Http\Controllers\PathologyController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AllergieController;
use App\Http\Controllers\MedicamentController;
use Illuminate\Routing\RouteRegistrar;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Pharmacien\PharmacienController;
use App\Http\Controllers\AnalyseController;
use App\Http\Controllers\RecresultController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HistoriqueController;
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
    return view('home1');
});
Route::get('/user/home', function () {
    return view('user.home');
});
Route::get('/user/therapeuticrec', function () {
    return view('user.therapeuticrec');
});
Route::get('/user/analysisresult', function () {
    return view('user.analysisresult');
});
Route::get('/user/rechercheMed', function () {
    return view('user.rechercheMedicament');
});
Route::get('/user/prescriptionanalysis', function () {
    return view('user.prescriptionanalysis');
});
Route::get('/user/recherchePathologie', function () {
    return view('user.recherchePathologie');
});
//------------------------pharmacien
Route::get('/pharmacien', function () {
    return view('pharmacien.home');
});
Route::get('/pharmacien/therapeuticrec', function () {
    return view('pharmacien.therapeuticrec');
});
/*Route::get('/pharmacien/analysisresult', function () {
    return view('pharmacien.analysisresult');
});*/
Route::get('/pharmacien/prescriptionanalysis', function () {
    return view('pharmacien.prescriptionanalysis');
});
Route::get('/pharmacien/rechercheMed', function () {
    return view('pharmacien.rechercheMedicament');
});
Route::get('/pharmacien/recherchePathologie', function () {
    return view('pharmacien.recherchePathologie');
});
Route::get('/pharmacien/rechercheAllergie', function () {
    return view('pharmacien.rechercheAllergie');
});

Route::get('/register', function () {
    return view('auth.register');
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




Route::get('autocompleteA',[AllergieController::class,'autocompleteA'])->name('autocompleteA');
Auth::routes();


//forms
Route::get('/recresulttest',function(){
	return view('user.recresult');
}); 
Route::post('/user/recresult',[RecresultController::class,'getData'])->name('recresult');



Route::get('/recresulttest',function(){
    return view('pharmacien.recresult');
}); 
Route::post('/pharmacien/recresult',[RecresultController::class,'getData'])->name('recresult');
Route::post('/admin/recresult',[RecresultController::class,'getData'])->name('recresult');
// recherch emedicament
Route::post('/user/medresult',[MedicationController::class,'MedinfoLight'])->name('medresult');
Route::post('/pharmacien/medresult',[MedicationController::class,'MedinfoLight'])->name('medresult');



//analyse
Route::post('/user/analyseresult',[AnalyseController::class,'analyse'])->name('analyseresult');
Route::post('/pharmacien/analyseresult',[AnalyseController::class,'analyse'])->name('analyseresultp');
Route::post('/admin/analyseresult',[AnalyseController::class,'analyse'])->name('analyseresulta');
//education

Route::POST('/user/education',[EducationController::class,'test'])->name('education');


//medicationdetail

Route::get('/medicationdetail/{id}/{cat}',[MedicationController::class,'MedInfo'])->name('medicationdetail');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//admin routes

Route::get('/dashboardAdmin', function () {
    return view('layouts.admin');
});
Route::get('/admin/recherchepathologie', function () {
    return view('admin.RecherchePathologie');
})->name('admin.patho');

Route::get('/admin/recherchallergie', function () {
    return view('admin.RechercheAllergie');
});

Route::get('/admin/analyse', function () {
    return view('admin.analyse');
});

Route::get('/admin/recommandation', function () {
    return view('admin.recommandation');
});

Route::get('/historique', function () {
    return view('admin.historiquerecherche');
});
Route::get('/creeCompte', function () {
    return view('admin.creeCompte');
});
Route::get('/modifierCompte', function () {
    return view('admin.modifierCompte');
});
Route::get('/historiquerec',[HistoriqueController::class,'indexrec'])->name('historiquerec');
Route::get('/historiqueanalyse',[HistoriqueController::class,'indexanalyse'])->name('historiqueanalyse');


Route::POST('/patho',[SearchController::class,'getpathologyfunction'])->name('patho');

Route::POST('/allergie',[AllergieController::class,'getallergiefunction'])->name('allergie');
Route::GET('/listUser',[UserController::class,'index'])->name('listUser');

Route::resource('users',UserController::class);
Route::get('user/create',[UserController::class,'create'])->name('user.create');
Route::get('user/add',[UserController::class,'addUser'])->name('user.add');
Route::post('user/save',[UserController::class,'store'])->name('user.save');
Route::get('edit/{id}', [UserController::class,'edit'])->name('edit');
Route::get('delete/{id}', [UserController::class,'delete'])->name('delete');
Route::put('/{id}/update',[UserController::class,'update'])->name('update');


