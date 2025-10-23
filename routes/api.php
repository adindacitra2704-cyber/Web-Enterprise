<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Di sini kamu bisa mendaftarkan route API untuk aplikasi kamu.
| Route ini otomatis diberi prefix "/api".
|
*/

Route::middleware('api')->get('/user', function (Request $request) {
    return $request->user();
});
