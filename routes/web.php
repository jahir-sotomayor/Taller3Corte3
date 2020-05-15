<?php

Route::get('/', function () {
    return view('welcome');
});


Route::post('/store', 'ConsultaController@store');
Route::get('/index', 'ConsultaController@index');