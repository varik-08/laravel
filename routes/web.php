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

Route::view('/','welcome');


Route::get('/id{digits?}', 'UserController@id')->where('digits','[0-9]+');


Route::get('/form', 'UserController@form1');
Route::post('/form', 'UserController@form2');