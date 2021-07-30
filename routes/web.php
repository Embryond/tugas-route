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

Route::get('/beranda', function () {
    return view('beranda.index');
})->name('beranda');

Route::get('/galeri', function () {
    return view('galeri.index');
})->name('galeri');

Route::get('/profil', function () {
    return view('profil.index');
})->name('profil');