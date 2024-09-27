<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\AdminController;

Route::post('/api/login', [AuthController::class, 'login']);
Route::post('/api/register', [AuthController::class, 'register']);
// Route::post('/api/tambahPasien', [PasienController::class, 'store']);
// Route::delete('/api/datapasien/{id_pasien}', [PasienController::class, 'destroy']);

