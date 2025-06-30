<?php

use App\Http\Controllers\MahasiswaController;

Route::get('/', [MahasiswaController::class, 'index']);
Route::resource('mahasiswa', MahasiswaController::class);

