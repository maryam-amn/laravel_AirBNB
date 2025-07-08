<?php

use App\Http\Controllers\AppartementController;
use App\Http\Controllers\ReservationController;
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
Route::get('/bookapt', function () {
    return view('bookapartements');
});
Route::resource('appartements', AppartementController::class);

Route::resource('reservations', ReservationController::class);
