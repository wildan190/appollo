<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PokjaController;
use App\Http\Controllers\KodePokjaController;
use App\Http\Controllers\DataTenderController;
use App\Http\Controllers\DataPersonilController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    // Rute untuk PokjaController
    Route::resource('pokjas', PokjaController::class);

    // Rute untuk KodePokjaController
    Route::resource('kode_pokjas', KodePokjaController::class);

    // Rute untuk DataTenderController
    Route::resource('data_tenders', DataTenderController::class);

    // Rute untuk DataPersonilController
    Route::resource('data_personils', DataPersonilController::class);

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
