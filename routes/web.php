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
Route::get('/login', 'AdminController@login');
Route::get('/profilperusahaan', 'ProfilController@index');

Route::middleware('auth')->group(function () {
	Route::get('/pegawai', 'PegawaiController@index')->name('pegawai');
	Route::post('/pegawai/create', 'PegawaiController@create')->name('pegawai.create');
	Route::get('/pegawai/{id}/edit', 'PegawaiController@edit');
	Route::post('/pegawai/{id}/update', 'PegawaiController@update')->name('pegawai.update');
	Route::get('/pegawai/{id}/delete', 'PegawaiController@delete');
	Route::get('/lowker', 'LowonganPekerjaanController@indexdash')->name('lowker');
	Route::post('/lowker', 'LowonganPekerjaanController@create')->name('lowker.create');
	Route::get('/lowker/{id}/edit', 'LowonganPekerjaanController@edit');
	Route::post('/lowker/{id}/update', 'LowonganPekerjaanController@update')->name('lowker.update');
	Route::get('/lowker/{id}/delete', 'LowonganPekerjaanController@delete');
	Route::get('/visidanmisi', 'VisiMisiController@indexdash')->name('visimisi');
	Route::post('/visidanmisi/{id}/update', 'VisiMisiController@update')->name('visimisi.update');
	Route::get('profilper', 'ProfilController@indexdash')->name('profilper');
	Route::post('profilper/{id}/update', 'ProfilController@update')->name('profilper.update');
});

Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/lowonganpekerjaan', 'LowonganPekerjaanController@index');
Route::get('/lowonganpekerjaan/{id}', 'LowonganPekerjaanController@show');


//tentang Kami
Route::get('/visimisi', 'VisiMisiController@index');
Route::post('/visimisi/create', 'VisiMisiController@create');
