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

Route::get('/halaman', 'SiswaController@index')->name('beranda');
Route::post('/simpan-siswa', 'Siswa2Controller@store')->name('simpan-siswa');
Route::post('/simpan-siswa1', 'siswa1Controller@store')->name('simpan-siswa1');
Route::post('/simpan-beranda', 'berandaController@store')->name('simpan-beranda');
Route::get('/beranda', 'berandaController@index')->name('beranda');
Route::get('/data-siswa2', 'siswa1Controller@index')->name('data-siswa2');
Route::get('/data-siswa', 'Siswa2Controller@index')->name('data-siswa');
Route::get('/create-data2', 'siswa1Controller@create')->name('create-data2');
Route::get('/create-data', 'Siswa2Controller@create')->name('create-data');
Route::get('/create-beranda', 'berandaController@create')->name('create-beranda');
Route::post('/update-beranda/{id}', 'berandaController@update')->name('update-beranda');
Route::get('/edit-beranda/{id}', 'berandaController@edit')->name('edit-beranda');
Route::get('/delete-beranda/{id}', 'berandaController@destroy')->name('delete-beranda');
Route::post('/update-siswa/{id}', 'Siswa2Controller@update')->name('update-siswa');
Route::get('/edit-siswa/{id}', 'Siswa2Controller@edit')->name('edit-siswa');
Route::get('/delete-siswa/{id}', 'Siswa2Controller@destroy')->name('delete-siswa');
Route::post('/update-siswa1/{id}', 'siswa1Controller@update')->name('update-siswa1');
Route::get('/edit-siswa2/{id}', 'siswa1Controller@edit')->name('edit-siswa2');
Route::get('/delete-siswa2/{id}', 'siswa1Controller@destroy')->name('delete-siswa2');