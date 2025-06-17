<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Login', function () {
    return view('login');
});
Route::get('/Register', function () {
    return view('register');
});
Route::get('/avaibleapt', function () {
    return view('apprtementAvaible');
});

Route::get('/newapt', function () {
    return view('creationapartements');
});

Route::get('/editapt', function () {
    return view('editapartements');
});
