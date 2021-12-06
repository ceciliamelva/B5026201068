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

Route::get('praktikum1', function () {
    return view('prak1web');
});

Route::get('praktikum2', function () {
    return view('prak2web');
});

Route::get('ets', function () {
    return view('etsweb');
});

// Route::get('show', 'ViewController@showForm')
// Route::post('math', 'ViewController@mathFunc')

Route::get('show','ViewController@showForm');
Route::post('math','ViewController@mathFunc');

// Route CRUD
Route::get('/pegawai','PegawaiController@index');

Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');

Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

// Route CRUD mutasi
Route::get('/mutasi','MutasiController@index');

Route::get('/mutasi/tambah','MutasiController@tambah');
Route::post('/mutasi/store','MutasiController@store');

Route::get('/mutasi/edit/{id}','MutasiController@edit');
Route::post('/mutasi/update','MutasiController@update');

Route::get('/mutasi/hapus/{id}','MutasiController@hapus');

// Route CRUD absen
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
