<?php

use App\Http\Controllers\AppartementController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/Login', [UserController::class, 'ShowLoginForm'])->name('show.login');
Route::get('/Register', [UserController::class, 'ShowRegisterForm'])->name('show.register');

Route::post('/Login', [UserController::class, 'login'])->name('login');
Route::post('/Register', [UserController::class, 'register'])->name('register');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::resource('appartements', AppartementController::class);

Route::resource('reservations', ReservationController::class);
