<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [UserController::class, 'index']);
Route::get('/admin', [UserController::class, 'index']);
Route::get('/admin/user', [UserController::class, 'index']);
Route::get('/admin/provider', [ProviderController::class, 'index']);
Route::get('/admin/produk', [ProdukController::class, 'index']);
Route::get('/admin/transaksi', [TransaksiController::class, 'index']);
Route::get('/admin/transaksi/cetak/{id}', [TransaksiController::class, 'cetakLaporan']);
Route::get('/admin/laporanpesanan', [LaporanPesananController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
