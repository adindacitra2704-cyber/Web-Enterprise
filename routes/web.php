<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('pages.welcome');
});

Route::get('/tentang', function () {
    return view('pages.tentang');
});

Route::get('/layanan', function () {
    return view('pages.layanan');
});