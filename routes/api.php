<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\JenisKejadianController;
use App\Http\Controllers\UserController;

Route::post('/login', [AuthController::class, 'login']);

// TEST SEMENTARA TANPA LOGIN
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::apiResource('laporan', LaporanController::class);
Route::apiResource('jenis-kejadian', JenisKejadianController::class);
Route::apiResource('users', UserController::class);

// NANTI KALAU LOGIN SUDAH JADI, BARU PAKAI INI
// Route::middleware('auth:sanctum')->group(function () {
//     Route::post('/logout', [AuthController::class, 'logout']);
//     Route::get('/dashboard', [DashboardController::class, 'index']);
//     Route::apiResource('laporan', LaporanController::class);
//     Route::apiResource('jenis-kejadian', JenisKejadianController::class);
//     Route::apiResource('users', UserController::class);
// });