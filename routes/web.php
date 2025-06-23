<?php

use Illuminate\Support\Facades\Route;
// page responcive
Route::get('/', function () {
    return view('homepage');
});
Route::get('/Login', function () {
    return view('login');
});
Route::get('/Register', function () {
    return view('register');
});
Route::get('/avaibleapt', function () {
    return view('appartementAvailable');
});
Route::get('/newapt', function () {
    return view('creationapartements');
});
Route::get('/editapt', function () {
    return view('editapartements');
});
Route::get('/detailapt', function () {
    return view('detailsapartements');
});
Route::get('/bookapt', function () {
    return view('bookapartements');
});

