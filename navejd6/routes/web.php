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
//Route::get('mi-edad','Controller@edad'); 
Route::get('/', function () {
    return view('welcome');
});
//Route::post('/insert','Controller@insert'); 