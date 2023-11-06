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

Route::get('/github', function () {
    return view('github');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/js1', function () {
    return view('js1');
});

Route::get('/js2', function () {
    return view('js2');
});

Route::get('/latihan', function () {
    return view('latihan');
});

Route::get('/linktree_cove', function () {
    return view('linktree_cove');
});

Route::get('/style', function () {
    return view('style');
});

Route::get('/validasi', function () {
    return view('validasi');
});
