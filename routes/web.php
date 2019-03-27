<?php


Route::group(['middleware' => 'web'], function(){

    Route::get('/depositar', 'OperacoesBancariasControler@abrirConta');

});
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::get('/index', 'OperacoesBancariasControler@index');
Route::get('/abrirconta', 'OperacoesBancariasControler@abrirConta');
