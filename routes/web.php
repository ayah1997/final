<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/product','ProductController@index')->name('index');
Route::get('/create','ProductController@create')->name('create');
Route::post('/store','ProductController@store')->name('store');
Route::get('/{product}/edit','ProductController@edit')->name('edite');
Route::post('/update/{product}','ProductController@update')->name('update');
Route::get('delete/{id}','ProductController@destroy')->name('delete');

