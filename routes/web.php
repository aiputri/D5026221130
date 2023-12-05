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

Route::get('halo', function () {
    return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('halo2', function () {
    return "<h1>Halo, Selamat datang</h1>";
});

Route::get('berita', function () {
    return view('berita');
});

Route::get('/blog2', function () {
    return view('blog');
});

Route::get('github', function () {
    return view('github');
});

Route::get('hello', function () {
    return view('hello');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('latihan', function () {
    return view('latihan');
});

Route::get('linktree_cove', function () {
    return view('linktree_cove');
});

Route::get('responsive', function () {
    return view('responsive');
});

Route::get('style', function () {
    return view('style');
});

Route::get('validasi', function () {
    return view('validasi');
});

Route::get('perkalian','App\Http\Controllers\MahasiswaController@index');
Route::get('show','App\Http\Controllers\MahasiswaController@showBlog');

//Route::get('/pegawai/{nama}','App\Http\Controllers\MahasiswaController@shownama');

Route::get('/formulir', 'App\Http\Controllers\MahasiswaController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\MahasiswaController@proses');

// route blog
Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

// route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

//route CRUD NilaiKuliah
// halaman utama database nilaikuliah
Route::get('/nilaikuliah','App\Http\Controllers\LatihanEasController@index');

// tambah utama database nilaikuliah
Route::post('/nilaikuliah/store','App\Http\Controllers\LatihanEasController@store');
Route::get('/nilaikuliah/tambah','App\Http\Controllers\LatihanEasController@tambah');
