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

Route::get('teste', function(){
    return "Olá mundo!!";
});

Route::get('testeController', 'testeController@index');

Route::get('testeController/primeiraView', 'testeController@primeiraView');

Route::get('testeController/segundaView', 'testeController@segundaView');