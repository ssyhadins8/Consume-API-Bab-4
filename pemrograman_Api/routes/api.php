<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show']);
Route::put('/mahasiswa/{nim}', [MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/{nim}', [MahasiswaController::class, 'destroy']);