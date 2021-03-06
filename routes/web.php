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
    return view('pages/home');
});


Route::get('/gallery', function () {
    return view('pages/gallery');
});

Route::get('/our-studio', function () {
    return view('pages/our-studio');
});

Route::get('/detail-video', function () {
    return view('pages/detail-video');
});

Route::get('/latihan', function () {
    return view('pages/latihan');
});