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


Route::middleware(['auth'])->group(function () {//permite acessar  o conteúdo após logado

Route::get('/',['as'=>'admin.index', 'uses'=>'ContatoController@index']);

Route::get('/criar-contato',  ['as'=>'admin.create', 'uses'=>'ContatoController@create']);
Route::get('/editar-contato-{id}',  ['as'=>'admin.edit', 'uses'=>'ContatoController@edit']);
Route::get('/destroy{id}', 'ContatoController@destroy')->name('destroy');
Route::post('/atualizar-contato-{id}', 'ContatoController@update')->name('update');
Route::post('/store', 'ContatoController@store')->name('store');
});

Auth::routes();
