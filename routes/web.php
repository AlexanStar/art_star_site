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

Route::get( '/', 'Controller@index');

Route::get('/poems','PoemsController@index');
Route::get('/prose','Controller@index');
Route::get('/books','BookController@index');

Route::get('/poems/{name}','Controller@index');
Route::get('/prose/{name}','Controller@index');
Route::get('/book/{name}','Controller@index')->name('book.name');

Route::get('/poems/{name}/{page}','Controller@index');
Route::get('/prose/{name}/{page}','Controller@index');
Route::get('/book/{name}/{page}','Controller@index');
