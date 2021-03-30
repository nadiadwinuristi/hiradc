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
//timk3lh
Route::get('data-timk3lh','timk3lhController@index')->name('data-timk3lh');
Route::get('create-timk3lh','timk3lhController@create')->name('create-timk3lh');
Route::post('simpan-timk3lh','timk3lhController@store')->name('simpan-timk3lh');
Route::get('edit-timk3lh/{id}','timk3lhController@edit')->name('edit-timk3lh');
Route::post('update-timk3lh/{id}','timk3lhController@update')->name('update-timk3lh');
Route::get('delete-timk3lh/{id}','timk3lhController@destroy')->name('delete-timk3lh');

//kegiatan
Route::get('data-kegiatan','kegiatanController@index')->name('data-kegiatan');
Route::get('create-kegiatan','kegiatanController@create')->name('create-kegiatan');
Route::post('simpan-kegiatan','kegiatanController@store')->name('simpan-kegiatan');
Route::get('edit-kegiatan/{id}','kegiatanController@edit')->name('edit-kegiatan');
Route::post('update-kegiatan/{id}','kegiatanController@update')->name('update-kegiatan');
Route::get('delete-kegiatan/{id}','kegiatanController@destroy')->name('delete-kegiatan');

//kategori
Route::get('data-kategori','kategoriController@index')->name('data-kategori');
Route::get('create-kategori','kategoriController@create')->name('create-kategori');
Route::post('simpan-kategori','kategoriController@store')->name('simpan-kategori');
Route::get('edit-kategori/{id}','kategoriController@edit')->name('edit-kategori');
Route::post('update-kategori/{id}','kategoriController@update')->name('update-kategori');
Route::get('delete-kategori/{id}','kategoriController@destroy')->name('delete-kategori');

//kemungkinan
Route::get('data-kemungkinan','kemungkinanController@index')->name('data-kemungkinan');
Route::get('create-kemungkinan','kemungkinanController@create')->name('create-kemungkinan');
Route::post('simpan-kemungkinan','kemungkinanController@store')->name('simpan-kemungkinan');
Route::get('edit-kemungkinan/{id}','kemungkinanController@edit')->name('edit-kemungkinan');
Route::post('update-kemungkinan/{id}','kemungkinanController@update')->name('update-kemungkinan');
Route::get('delete-kemungkinan/{id}','kemungkinanController@destroy')->name('delete-kemungkinan');

//kondisi
Route::get('data-kondisi','kondisiController@index')->name('data-kondisi');
Route::get('create-kondisi','kondisiController@create')->name('create-kondisi');
Route::post('simpan-kondisi','kondisiController@store')->name('simpan-kondisi');
Route::get('edit-kondisi/{id}','kondisiController@edit')->name('edit-kondisi');
Route::post('update-kondisi/{id}','kondisiController@update')->name('update-kondisi');
Route::get('delete-kondisi/{id}','kondisiController@destroy')->name('delete-kondisi');

//Istilah
Route::get('data-istilah','istilahController@index')->name('data-istilah');
Route::get('create-istilah','istilahController@create')->name('create-istilah');
Route::post('simpan-istilah','istilahController@store')->name('simpan-istilah');
Route::get('edit-istilah/{id}','istilahController@edit')->name('edit-istilah');
Route::post('update-istilah/{id}','istilahController@update')->name('update-istilah');
Route::get('delete-istilah/{id}','istilahController@destroy')->name('delete-istilah');

//threat
Route::get('data-threat','threatController@index')->name('data-threat');
Route::get('create-threat','threatController@create')->name('create-threat');
Route::post('simpan-threat','threatController@store')->name('simpan-threat');
Route::get('edit-threat/{id}','threatController@edit')->name('edit-threat');
Route::post('update-threat/{id}','threatController@update')->name('update-threat');
Route::get('delete-threat/{id}','threatController@destroy')->name('delete-threat');

//vulnerability
Route::get('data-vulnerability','vulnerabilityController@index')->name('data-vulnerability');
Route::get('create-vulnerability','vulnerabilityController@create')->name('create-vulnerability');
Route::post('simpan-vulnerability','vulnerabilityController@store')->name('simpan-vulnerability');
Route::get('edit-vulnerability/{id}','vulnerabilityController@edit')->name('edit-vulnerability');
Route::post('update-vulnerability/{id}','vulnerabilityController@update')->name('update-vulnerability');
Route::get('delete-vulnerability/{id}','vulnerabilityController@destroy')->name('delete-vulnerability');






