<?php

use App\Http\Controllers\PondokController;

Route::get('/', [PondokController::class, 'beranda']);
Route::get('/pendaftaran', [PondokController::class, 'pendaftaran']);
Route::post('/pendaftaran', [PondokController::class, 'simpan']);
Route::get('/tatatertib', [PondokController::class, 'tataTertib']);
Route::get('/datasantri', [PondokController::class, 'dataSantri']);

