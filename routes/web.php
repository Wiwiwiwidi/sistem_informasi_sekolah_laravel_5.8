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
    return view('/welcome');
});

Route::get('/login', 'LoginController@login')->name('login');
Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth','ceklevel:admin']], function () {

Route::get('siswa', 'siswaController@index')->name('siswa.index');
Route::get('siswa/create', 'siswaController@create')->name('siswa.create');
Route::post('siswa', 'siswaController@store')->name('siswa.store');
Route::get('siswa/{id}/edit', 'siswaController@edit')->name('siswa.edit');
Route::put('siswa/{id}', 'siswaController@update')->name('siswa.update');
Route::delete('siswa/{id}', 'siswaController@destroy')->name('siswa.destroy');

Route::get('guru', 'guruController@index')->name('guru.index');
Route::get('guru/create', 'guruController@create')->name('guru.create');
Route::post('guru', 'guruController@store')->name('guru.store');
Route::get('guru/{id}/edit', 'guruController@edit')->name('guru.edit');
Route::put('guru/{id}', 'guruController@update')->name('guru.update');
Route::delete('guru/{id}', 'guruController@destroy')->name('guru.destroy');

Route::get('kelas', 'kelasController@index')->name('kelas.index');
Route::get('kelas/create', 'kelasController@create')->name('kelas.create');
Route::post('kelas', 'kelasController@store')->name('kelas.store');
Route::get('kelas/{id}/edit', 'kelasController@edit')->name('kelas.edit');
Route::put('kelas/{id}', 'kelasController@update')->name('kelas.update');
Route::delete('kelas/{id}', 'kelasController@destroy')->name('kelas.destroy');

Route::get('mapel', 'mapelController@index')->name('mapel.index');
Route::get('mapel/create', 'mapelController@create')->name('mapel.create');
Route::post('mapel', 'mapelController@store')->name('mapel.store');
Route::get('mapel/{id}/edit', 'mapelController@edit')->name('mapel.edit');
Route::put('mapel/{id}', 'mapelController@update')->name('mapel.update');
Route::delete('mapel/{id}', 'mapelController@destroy')->name('mapel.destroy');

Route::get('jadwal', 'jadwalController@index')->name('jadwal.index');
Route::get('jadwal/create', 'jadwalController@create')->name('jadwal.create');
Route::post('jadwal', 'jadwalController@store')->name('jadwal.store');
Route::get('jadwal/{id}/edit', 'jadwalController@edit')->name('jadwal.edit');
Route::put('jadwal/{id}', 'jadwalController@update')->name('jadwal.update');
Route::delete('jadwal/{id}', 'jadwalController@destroy')->name('jadwal.destroy');

Route::get('/dashboard', 'dashboardController@index')->name('dashboardadmin');


// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
});