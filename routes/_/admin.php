<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AsetController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\OpdController;
use App\Http\Controllers\Admin\PegawaiController;
use App\Http\Controllers\Admin\RuanganController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:admin'], function () {
    
    Route::get('/', [AdminController::class, 'dashboard']);
    Route::resource('admin', AdminController::class);
    Route::resource('opd', OpdController::class);

    Route::resource('pegawai', PegawaiController::class);

    Route::get('ruangan', [RuanganController::class, 'index']);
    Route::post('ruangan', [RuanganController::class, 'store']);
    Route::put('ruangan/{ruangan}', [RuanganController::class, 'update']);
    Route::get('ruangan/delete/{ruangan}', [RuanganController::class, 'destroy']);

    Route::get('kategori', [KategoriController::class, 'index']);
    Route::post('kategori', [KategoriController::class, 'store']);
    Route::put('kategori/{kategori}', [KategoriController::class, 'update']);
    Route::get('kategori/delete/{kategori}', [KategoriController::class, 'destroy']);

    Route::resource('aset', AsetController::class);

});
