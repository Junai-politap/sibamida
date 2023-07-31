<?php

use App\Http\Controllers\Opd\JembatandanjalanController;
use App\Http\Controllers\Opd\KategoriController;
use App\Http\Controllers\Opd\OpdController;
use App\Http\Controllers\Opd\PegawaiController;
use App\Http\Controllers\Opd\PeralatandanmesinController;
use App\Http\Controllers\Opd\RuanganController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:opd'], function () {

    Route::get('/', [OpdController::class, 'index']);

    Route::resource('pegawai', PegawaiController::class);
    Route::resource('ruangan', RuanganController::class);
    Route::resource('kategori', KategoriController::class);

    //jembatan
    Route::resource('master/jembatan-jalan', JembatandanjalanController::class);
    Route::post('riwayat', [JembatandanjalanController::class, 'riwayat']);
    Route::get('/delete-riwayat/{riwayat}', [JembatandanjalanController::class, 'hapus']);

    //peralatan
    Route::resource('master/peralatan-mesin', PeralatandanmesinController::class);
    Route::post('riwayat', [PeralatandanmesinController::class, 'riwayat']);
    Route::get('/delete-riwayat/{riwayat}', [PeralatandanmesinController::class, 'hapus']);
});
