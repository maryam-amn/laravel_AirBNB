<?php

use App\Http\Controllers\AppartementController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});
Route::get('/Login', function () {
    return view('login');
});
Route::get('/Register', function () {
    return view('register');
});

Route::resource('appartements', AppartementController::class);

