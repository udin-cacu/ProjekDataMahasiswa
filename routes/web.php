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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route Kuliah

Route::get('/kuliah','KuliahController@index');

Route::post('/kuliah/create', 'KuliahController@create');

Route::get('/kuliah/{id}/edit','KuliahController@edit');

Route::post('/kuliah/{id}/update','KuliahController@update');

Route::get('/kuliah/{id}/delete','KuliahController@delete');

//Route Matkul

Route::get('/matkul','MatkulController@index');

Route::post('/matkul/create', 'MatkulController@create');

Route::get('/matkul/{id}/edit','MatkulController@edit');

Route::post('/matkul/{id}/update','MatkulController@update');

Route::get('/matkul/{id}/delete','MatkulController@delete');

//Rourte Siswa

Route::get('/siswa','SiswaController@index');

Route::post('/siswa/create', 'SiswaController@create');

Route::get('/siswa/{id}/edit','SiswaController@edit');

Route::post('/siswa/{id}/update','SiswaController@update');

Route::get('/siswa/{id}/delete','SiswaController@delete');


//Route Prodi

Route::get('/prodi','ProdiController@index');

Route::post('/prodi/create', 'ProdiController@create');

Route::get('/prodi/{id}/edit','ProdiController@edit');

Route::post('/prodi/{id}/update','ProdiController@update');

Route::get('/prodi/{id}/delete','ProdiController@delete');