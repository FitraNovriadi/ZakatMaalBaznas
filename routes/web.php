<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZakatController;
use App\Http\Controllers\KonfirmasiController;

Route::get('/', [ZakatController::class, 'index'])->name('index');
Route::get('/perhitungan-zakat', [ZakatController::class, 'FormPerhitungan'])->name('FormPehitungan');
Route::post('/perhitungan-zakat', [ZakatController::class, 'Perhitungan'])->name('perhitungan');
Route::get('/bayar', [ZakatController::class, 'FormPembayaran'])->name('FormPembayaran');
Route::post('/bayar', [ZakatController::class, 'pembayaran'])->name('pembayaran');
Route::get('/info', [ZakatController::class, 'info'])->name('info');
Route::get('/konfirmasi', [KonfirmasiController::class, 'formKonfirmasi'])->name('formKonfirmasi');
Route::post('/konfirmasi', [KonfirmasiController::class, 'konfirmasi'])->name('konfirmasi');
Route::get('/hasil-pembayaran/{pembayaranZakat}', [ZakatController::class, 'hasilPembayaran'])->name('hasilPembayaran');
Route::get('/transfer', [ZakatController::class, 'FormBank'])->name('FormBank');
// Route::get('/admin', [ZakatController::class, 'viewAdmin'])->name('viewAdmin');