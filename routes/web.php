<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ATLMController;

// Admin routes
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/admin/registrasi', [AdminController::class, 'registrasi']);
    Route::post('/admin/registrasi', [AdminController::class, 'storeRegistrasi']);
    Route::get('/admin/order-pemeriksaan', [AdminController::class, 'orderPemeriksaan']);
    Route::post('/admin/order-pemeriksaan', [AdminController::class, 'storeOrderPemeriksaan']);
    Route::get('/admin/pembayaran', [AdminController::class, 'pembayaran']);
    Route::post('/admin/pembayaran', [AdminController::class, 'storePembayaran']);
    Route::get('/admin/settings', [AdminController::class, 'settings']);
    Route::get('/admin/kontak', [AdminController::class, 'kontak']);
    Route::get('/admin/help', [AdminController::class, 'help']);
});

// ATLM routes
Route::middleware(['auth', 'isATLM'])->group(function () {
    Route::get('/atlm/dashboard', [ATLMController::class, 'dashboard']);
    Route::get('/atlm/pemeriksaan', [ATLMController::class, 'pemeriksaan']);
    Route::post('/atlm/pemeriksaan', [ATLMController::class, 'storePemeriksaan']);
    Route::get('/atlm/riwayat-pemeriksaan', [ATLMController::class, 'riwayatPemeriksaan']);
    Route::post('/atlm/riwayat-pemeriksaan/validasi', [ATLMController::class, 'validasiPemeriksaan']);
    Route::get('/atlm/riwayat-pemeriksaan/cetak', [ATLMController::class, 'cetakPemeriksaan']);
    Route::get('/atlm/laporan-keuangan', [ATLMController::class, 'laporanKeuangan']);
    Route::get('/atlm/stock-reagen', [ATLMController::class, 'stockReagen']);
    Route::get('/atlm/settings', [ATLMController::class, 'settings']);
    Route::get('/atlm/kontak', [ATLMController::class, 'kontak']);
    Route::get('/atlm/help', [ATLMController::class, 'help']);
});
