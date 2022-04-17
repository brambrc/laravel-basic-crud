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

Route::get('/penggunaCreate', 'PenggunaController@create')->name('penggunaCreate');
Route::post('/penggunaStore', 'PenggunaController@store')->name('penggunaStore');
Route::get('/penggunaEdit/{id}', 'PenggunaController@edit')->name('penggunaEdit');
Route::post('/penggunaUpdate/{id}', 'PenggunaController@update')->name('penggunaUpdate');
Route::get('/penggunaDelete/{id}', 'PenggunaController@destroy')->name('penggunaDelete');

