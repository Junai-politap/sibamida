<?php

use App\Http\Controllers\Opd\BangunanController;
use App\Http\Controllers\Opd\BidangController;
use App\Http\Controllers\Opd\JembatandanjalanController;
use App\Http\Controllers\Opd\KategoriController;
use App\Http\Controllers\Opd\KondisiController;
use App\Http\Controllers\Opd\LaporanController;
use App\Http\Controllers\Opd\OpdController;
use App\Http\Controllers\Opd\PegawaiController;
use App\Http\Controllers\Opd\PeralatandanmesinController;
use App\Http\Controllers\Opd\RuanganController;
use App\Http\Controllers\Opd\TanahController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:opd'], function () {

    Route::get('/', [OpdController::class, 'index']);

    Route::resource('pegawai', PegawaiController::class);

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

    Route::get('kondisi', [KondisiController::class, 'index']);
    Route::post('kondisi', [KondisiController::class, 'store']);
    Route::put('kondisi/{kondisi}', [KondisiController::class, 'update']);
    Route::get('kondisi/delete/{kondisi}', [KondisiController::class, 'destroy']);

    //jembatan
    Route::resource('master/jembatan-jalan', JembatandanjalanController::class);
    Route::post('jembatan-jalan/riwayat', [JembatandanjalanController::class, 'riwayat']);
    Route::put('/jembatan-jalan/update-riwayat/{riwayat}', [JembatandanjalanController::class, 'riwayatUpdate']);
    Route::get('/jembatan-jalan/delete-riwayat/{riwayat}', [JembatandanjalanController::class, 'hapus']);
    Route::get('/jembatan-export', [JembatandanjalanController::class, 'export']);
    Route::get('/jembatan-download-laporan', [JembatandanjalanController::class, 'downloadLaporan']);

    //peralatan
    Route::resource('master/peralatan-mesin', PeralatandanmesinController::class);
    Route::post('peralatan-mesin/riwayat', [PeralatandanmesinController::class, 'riwayat']);
    Route::put('/peralatan-mesin/update-riwayat/{riwayat}', [PeralatandanmesinController::class, 'riwayatUpdate']);
    Route::get('/peralatan-mesin/delete-riwayat/{riwayat}', [PeralatandanmesinController::class, 'hapus']);
    Route::get('/peralatan-export', [PeralatandanmesinController::class, 'export']);
    Route::get('/peralatan-download-laporan', [PeralatandanmesinController::class, 'downloadLaporan']);

    //bangunan
    Route::resource('master/bangunan', BangunanController::class);
    Route::post('bangunan/riwayat', [BangunanController::class, 'riwayat']);
    Route::put('/bangunan/update-riwayat/{riwayat}', [BangunanController::class, 'riwayatUpdate']);
    Route::get('/bangunan/delete-riwayat/{riwayat}', [BangunanController::class, 'hapus']);
    Route::get('/bangunan-export', [BangunanController::class, 'export']);
    Route::get('/bangunan-download-laporan', [BangunanController::class, 'downloadLaporan']);

    //tanah
    Route::resource('master/tanah', TanahController::class);
    Route::post('tanah/riwayat', [TanahController::class, 'riwayat']);
    Route::put('/tanah/update-riwayat/{riwayat}', [TanahController::class, 'riwayatUpdate']);
    Route::get('/tanah/delete-riwayat/{riwayat}', [TanahController::class, 'hapus']);
    Route::get('/tanah-export', [TanahController::class, 'export']);
    Route::get('/tanah-download-laporan', [TanahController::class, 'downloadLaporan']);

    Route::get('laporan', [LaporanController::class, 'index']);

    
    Route::post('kondisi', [PeralatanDanMesinController::class, 'storeKondisi']);
});
