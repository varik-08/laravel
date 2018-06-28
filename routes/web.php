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

Route::get('/getDigit/{digit}', function ($digit) {
    echo $digit." Hello!";
});

Route::get('/getDigit/', function () {
    echo "Bay!";
});

Route::get('/id{digits?}', 'UserController@id');


route::get('/form',function(){
return view('form');
});
Route::post('/form',array('uses'=>'UserController@form'));