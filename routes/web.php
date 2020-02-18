<?php

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
    return view('welcome');
});

//Biodata
Route::get('/biodata', 'Biodata2Controller@index');
Route::post('/biodata/store', 'Biodata2Controller@store');
Route::get('/viewbiodata', 'Biodata2Controller@viewbiodata');
