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

Route::get('/', 'travelController@index');
Route::get('/uj', 'travelController@create');
Route::get('/uj', 'travelController@createuser');
Route::get('/uj', 'travelController@store');
Route::get('/uj', 'travelController@storeuser');
Route::get('/travels/{id}', 'travelController@show');
