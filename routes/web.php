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
use App\Check;
Route::get('/','MenuController@index');
Route::post('/rego','MenuController@rego')->middleware('check');
Route::post('/ajax','MenuController@ajax');
