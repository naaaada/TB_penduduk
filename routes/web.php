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

// Route::get('/', function () {
//     return view('welcome', ['coba' => 'YUk Coba TB']);
// }); 
// Route::get('home', function () {
//     return view('main');
// });
//Router Penduduk
Route::get('/', 'PendudukController@index')->name('penduduk.index');
Route::get('/penduduk', 'PendudukController@index')->name('penduduk.index');
Route::get('/penduduk/create', 'PendudukController@create')->name('penduduk.create');
Route::get('/penduduk/{id}', 'PendudukController@show')->name('penduduk.show');
Route::get('/penduduk/{id}/edit', 'PendudukController@edit')->name('penduduk.edit');
Route::delete('/penduduk/{id}', 'PendudukController@destroy')->name('penduduk.destroy');
Route::post('/penduduk/create', 'PendudukController@store')->name('penduduk.store');

Route::patch('/penduduk/{id}', 'PendudukController@update')->name('penduduk.update');

//Router Kartu Keluarga
Route::get('/KartuKeluarga', 'KartuKeluargaController@index')->name('KartuKeluarga.index');
Route::get('/KartuKeluarga/create', 'KartuKeluargaController@create')->name('KartuKeluarga.create');
Route::post('/KartuKeluarga/create', 'KartuKeluargaController@store')->name('KartuKeluarga.store');
Route::get('/KartuKeluarga/{id}', 'KartuKeluargaController@show')->name('KartuKeluarga.show');
Route::get('/KartuKeluarga/{id}/edit', 'KartuKeluargaController@edit')->name('KartuKeluarga.edit');
Route::patch('/KartuKeluarga/{id}', 'KartuKeluargaController@update')->name('KartuKeluarga.update');
Route::delete('/KartuKeluarga/{id}', 'KartuKeluargaController@destroy')->name('KartuKeluarga.destroy');

//Laporan
Route::get('/pendudukUP', 'LaporanController@pendudukUP');
Route::get('/pendudukNT', 'LaporanController@pendudukNT');
Route::get('/pendudukLP', 'LaporanController@pendudukLP');
Route::get('/listNagari', 'LaporanController@listNagari');
Route::get('/pendudukNT/pilihNT', 'LaporanController@pilihNagari');
Route::get('/pendudukLP/pilihLP', 'LaporanController@pilihNagariLP');