<?php

use Illuminate\Support\Facades\Route;

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
