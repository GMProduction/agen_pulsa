<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('produk')->group(function (){
        Route::get('produks',[\App\Http\Controllers\API\ProdukController::class,'index']);
        Route::get('produks/{id}',[\App\Http\Controllers\API\ProdukController::class,'detail']);
    });

    Route::prefix('transaksi')->group(function (){
        Route::match(['GET','POST'],'',[\App\Http\Controllers\API\TransaksiController::class,'transaksi']);
        Route::get('history',[\App\Http\Controllers\API\TransaksiController::class,'history']);
        Route::post('bukti/{id}',[\App\Http\Controllers\API\TransaksiController::class,'updateBukti']);
    });
    Route::get('profile',[\App\Http\Controllers\API\ProfileController::class,'index']);
});

Route::post('login',[\App\Http\Controllers\API\LoginController::class,'login']);
