<?php


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');


Route::get('/index', 'OperacoesBancariasControler@index');

Route::get('/empresa/novo', 'OperacoesBancariasControler@cadastroEmpresa');
Route::get('/resgate/novo', 'OperacoesBancariasControler@resgate');
Route::get('/investimento/novo', 'OperacoesBancariasControler@investimento');

Route::get('/empresa', 'OperacoesBancariasControler@empresa');
Route::get('/transacoes', 'OperacoesBancariasControler@transacoes');