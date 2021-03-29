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
Route::get('/beranda', function () {
    return view('halamandepan/beranda');
});
Route::get('data-timk3lh','timk3lhController@index')->name('data-timk3lh');
Route::get('create-timk3lh','timk3lhController@create')->name('create-timk3lh');
Route::post('simpan-timk3lh','timk3lhController@store')->name('simpan-timk3lh');
Route::get('edit-timk3lh/{id}','timk3lhController@edit')->name('edit-timk3lh');
Route::post('update-timk3lh/{id}','timk3lhController@update')->name('update-timk3lh');
Route::get('delete-timk3lh/{id}','timk3lhController@destroy')->name('delete-timk3lh');