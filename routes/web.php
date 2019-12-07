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

Route::get('/dashboard', function () {
	return view('dashboard');
});

Route::get('/layout', function () {
	return view('layout');
});

// halaman divisi
Route::get('/divisi','DivisiController@index');
Route::get('/divisi/tambah', 'DivisiController@tambah');
Route::post('/divisi/store', 'DivisiController@store');
Route::get('/divisi/edit/{id}', 'DivisiController@edit');
Route::put('/divisi/update/{id}', 'DivisiController@update');
Route::get('/divisi/hapus/{id}', 'DivisiController@delete');

// halaman jabatan
Route::get('/jabatan', 'JabatanController@index');
Route::get('/jabatan/tambah', 'JabatanController@tambah');
Route::post('/jabatan/store', 'JabatanController@store');
Route::get('/jabatan/edit/{id}', 'JabatanController@edit');
Route::put('/jabatan/update/{id}', 'JabatanController@update');
Route::get('/jabatan/hapus/{id}', 'JabatanController@delete');

// halaman karyawan
Route::get('/karyawan','KaryawanController@index');
Route::get('/karyawan/tambah', 'KaryawanController@tambah');
Route::post('/karyawan/store', 'KaryawanController@store');