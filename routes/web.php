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
Route::get('/pegawai/cari','PegawaiController@cari');

Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');

Route::get('/pegawai/detail/{id}','PegawaiController@view');

Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

// Route CRUD mutasi
Route::get('/mutasi','MutasiController@index');
Route::get('/mutasi/cari','mutasiController@cari');

Route::get('/mutasi/tambah','MutasiController@tambah');
Route::post('/mutasi/store','MutasiController@store');

Route::get('/mutasi/edit/{id}','MutasiController@edit');
Route::post('/mutasi/update','MutasiController@update');

Route::get('/mutasi/hapus/{id}','MutasiController@hapus');

// Route CRUD absen
Route::get('/absen','AbsenController@index');
Route::get('/absen/cari','absenController@cari');

Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

// Route CRUD dvd
Route::get('/dvd','dvdController@index');
Route::get('/dvd/cari','dvdController@cari');

Route::get('/dvd/tambah','dvdController@tambah');

Route::get('/dvd/detail/{id}','dvdController@view');
Route::post('/dvd/store','dvdController@store');
Route::get('/dvd/edit/{id}','dvdController@edit');
Route::post('/dvd/update','dvdController@update');
Route::get('/dvd/hapus/{id}','dvdController@hapus');

// Route CRUD nilaikuliah
Route::get('/nilaikuliah','nilaikuliahController@index');
Route::get('/nilaikuliah/cari','nilaikuliahController@cari');
Route::get('/nilaikuliah/tambah','nilaikuliahController@tambah');
Route::post('/nilaikuliah/store','nilaikuliahController@store');


