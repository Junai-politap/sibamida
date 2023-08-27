<?php

use App\Http\Controllers\Staff\BangunanController;
use App\Http\Controllers\Staff\BidangController;
use App\Http\Controllers\Staff\JembatanDanJalanController;
use App\Http\Controllers\Staff\KategoriController;
use App\Http\Controllers\Staff\PeralatanDanMesinController;
use App\Http\Controllers\Staff\RuanganController;
use App\Http\Controllers\Staff\StaffController;
use App\Http\Controllers\Staff\TanahController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:staff'], function () {

    Route::get('/', [StaffController::class, 'index']);

    Route::resource('master/jembatan-jalan', JembatanDanJalanController::class);
    Route::post('jembatan-jalan/riwayat', [JembatanDanJalanController::class, 'riwayat']);
    Route::put('/jembatan-jalan/update-riwayat/{riwayat}', [JembatanDanJalanController::class, 'riwayatUpdate']);
    Route::get('/jembatan-jalan/delete-riwayat/{riwayat}', [JembatanDanJalanController::class, 'hapus']);
    Route::get('/jembatan-export', [JembatandanjalanController::class, 'export']);
    Route::get('/jembatan-download-laporan', [JembatandanjalanController::class, 'downloadLaporan']);


    Route::resource('master/peralatan-mesin', PeralatanDanMesinController::class);
    Route::post('peralatan-mesin/riwayat', [PeralatanDanMesinController::class, 'riwayat']);
    Route::put('/peralatan-mesin/update-riwayat/{riwayat}', [PeralatanDanMesinController::class, 'riwayatUpdate']);
    Route::get('/peralatan-mesin/delete-riwayat/{riwayat}', [PeralatanDanMesinController::class, 'hapus']);
    Route::get('/peralatan-export', [PeralatandanmesinController::class, 'export']);
    Route::get('/peralatan-download-laporan', [PeralatandanmesinController::class, 'downloadLaporan']);

    Route::resource('master/bangunan', BangunanController::class);
    Route::post('bangunan/riwayat', [BangunanController::class, 'riwayat']);
    Route::put('/bangunan/update-riwayat/{riwayat}', [BangunanController::class, 'riwayatUpdate']);
    Route::get('/bangunan/delete-riwayat/{riwayat}', [BangunanController::class, 'hapus']);
    Route::get('/bangunan-export', [BangunanController::class, 'export']);
    Route::get('/bangunan-download-laporan', [BangunanController::class, 'downloadLaporan']);

    Route::resource('master/tanah', TanahController::class);
    Route::post('tanah/riwayat', [TanahController::class, 'riwayat']);
    Route::put('/tanah/update-riwayat/{riwayat}', [TanahController::class, 'riwayatUpdate']);
    Route::get('/tanah/delete-riwayat/{riwayat}', [TanahController::class, 'hapus']);
    Route::get('/tanah-export', [TanahController::class, 'export']);
    Route::get('/tanah-download-laporan', [TanahController::class, 'downloadLaporan']);

    Route::get('ruangan', [RuanganController::class, 'index']);
    Route::post('ruangan', [RuanganController::class, 'store']);
    Route::put('ruangan/{ruangan}', [RuanganController::class, 'update']);
    Route::get('ruangan/delete/{ruangan}', [RuanganController::class, 'destroy']);

    Route::get('kategori', [KategoriController::class, 'index']);
    Route::post('kategori', [KategoriController::class, 'store']);
    Route::put('kategori/{kategori}', [KategoriController::class, 'update']);
    Route::get('kategori/delete/{kategori}', [KategoriController::class, 'destroy']);

    Route::get('bidang', [BidangController::class, 'index']);
    Route::post('bidang', [BidangController::class, 'store']);
    Route::put('bidang/{bidang}', [BidangController::class, 'update']);
    Route::get('bidang/delete/{bidang}', [BidangController::class, 'destroy']);
});
