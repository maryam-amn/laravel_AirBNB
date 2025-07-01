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
Route::get('/avaibleapt', [AppartementController::class, 'viewAppartement']);

Route::get('/newapt', function () {
    return view('creationapartements');
});
Route::get('deleteapt/{id}', [AppartementController::class, 'deleteApt'])->name('deleteApt');
Route::get('/avaibleapt', [AppartementController::class, 'viewAppartement'])->name('appartementAvailable');
Route::get('/detailapt/{id}', [AppartementController::class, 'detailsAppartement'])-> name('detailsAppartement');
Route::get('/editapt/{id}', [AppartementController::class, 'editApt'])->name('editApt');
Route::put('/updateapt/{id}', [AppartementController::class, 'UpdateAppartement'])->name('appartement.update');

Route::get('/bookapt', function () {
    return view('bookapartements');
});

Route::post('/newapt', [AppartementController::class, 'addNewApt'])->name('addNewApt');


