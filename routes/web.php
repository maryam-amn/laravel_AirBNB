<?php

use App\Http\Controllers\AppartementController;
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
Route::get('/avaibleapt', [AppartementController::class, 'viewAppartement']);

Route::get('/newapt', function () {
    return view('creationapartements');
});
Route::get('deleteapt/{id}', [AppartementController::class, 'deleteApt']);
Route::get('/editapt/{id}', [AppartementController::class, 'editApt']);
Route::put('/updateapt/{id}', [AppartementController::class, 'UpdateAppartement']);

Route::get('/detailapt/{id}', [AppartementController::class, 'detailsAppartement']);

Route::get('/bookapt', function () {
    return view('bookapartements');
});

Route::post('/newapt', [AppartementController::class, 'addNewApt']);

