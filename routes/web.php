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




Route::middleware('auth')->group(function (){
    Route::match(['POST','GET'],'/admin', [\App\Http\Controllers\AdminController::class, 'index']);
    Route::match(['POST','GET'],'/', [UserController::class, 'index']);
    Route::get('/admin/provider', [ProviderController::class, 'index']);
    Route::match(['POST','GET'],'/admin/produk', [ProdukController::class, 'index']);
    Route::get('/admin/transaksi', [TransaksiController::class, 'index']);
    Route::post('/admin/transaksi/status', [TransaksiController::class, 'updateStatus']);
    Route::get('/admin/transaksi/cetak/{id}', [TransaksiController::class, 'cetakLaporan']);
    Route::get('/admin/laporanpesanan', [LaporanPesananController::class, 'index']);

});

Route::match(['POST','GET'],'/login', [LoginController::class, 'index'])->name('login');
