<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);

Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show']);

Route::get('/mahasiswa/{nim}/edit', [MahasiswaController::class, 'edit']);
Route::put('/mahasiswa/{nim}', [MahasiswaController::class, 'update']);

Route::delete('/mahasiswa/{nim}', [MahasiswaController::class, 'destroy']);