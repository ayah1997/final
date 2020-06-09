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
Route::put('/{product}/edit','ProductController@edit')->name('edit');
Route::patch('/update/{product}','ProductController@update')->name('update');
Route::delete('delete/{id}','ProductController@destroy');
