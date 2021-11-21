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

