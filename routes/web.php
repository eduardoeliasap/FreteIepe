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

Route::get('/', 'SiteController@index');

// Routes Login
Route::get('/user/index', 'UserController@index');
Route::post('/user/index', 'UserController@index');

// Routes main
Route::get('/site/principal', 'UserController@main');

// Routes Clientes
Route::get('/cliente/index', 'Cadastros\ClienteController@index');
Route::post('/cliente/store', 'Cadastros\ClienteController@store');
Route::get('/cliente/research', 'Cadastros\ClienteController@research');
Route::get('/cliente/return', 'Cadastros\ClienteController@return');
Route::post('/cliente/return', 'Cadastros\ClienteController@return');
