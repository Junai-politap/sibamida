<?php

use App\Http\Controllers\Opd\AsetController;
use App\Http\Controllers\Opd\KategoriController;
use App\Http\Controllers\Opd\OpdController;
use App\Http\Controllers\Opd\PegawaiController;
use App\Http\Controllers\Opd\RuanganController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:opd'], function () {

    Route::get('/', [OpdController::class, 'index']);
    Route::post('riwayat', [AsetController::class, 'riwayat']);

    Route::get('/delete-riwayat/{riwayat}', [AsetController::class, 'hapus']);
    Route::resource('pegawai', PegawaiController::class);
    Route::resource('ruangan', RuanganController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('aset', AsetController::class);
});
