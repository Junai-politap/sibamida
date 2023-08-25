<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BangunanController;
use App\Http\Controllers\Admin\BidangController;
use App\Http\Controllers\Admin\JembatanController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\OpdController;
use App\Http\Controllers\Admin\PegawaiController;
use App\Http\Controllers\Admin\PeralatanDanMesinController;
use App\Http\Controllers\Admin\RuanganController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\TanahController;
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

    Route::resource('master/jembatan-jalan', JembatanController::class);
    Route::post('jembatan-jalan/riwayat', [JembatanController::class, 'riwayat']);
    Route::put('/jembatan-jalan/update-riwayat/{riwayat}', [JembatanController::class, 'riwayatUpdate']);
    Route::get('/jembatan-jalan/delete-riwayat/{riwayat}', [JembatanController::class, 'hapus']);

    Route::resource('master/peralatan-mesin', PeralatanDanMesinController::class);
    Route::post('peralatan-mesin/riwayat', [PeralatanDanMesinController::class, 'riwayat']);
    Route::put('/peralatan-mesin/update-riwayat/{riwayat}', [PeralatanDanMesinController::class, 'riwayatUpdate']);
    Route::get('/peralatan-mesin/delete-riwayat/{riwayat}', [PeralatanDanMesinController::class, 'hapus']);

    Route::resource('master/bangunan', BangunanController::class);
    Route::post('bangunan/riwayat', [BangunanController::class, 'riwayat']);
    Route::put('/bangunan/update-riwayat/{riwayat}', [BangunanController::class, 'riwayatUpdate']);
    Route::get('/bangunan/delete-riwayat/{riwayat}', [BangunanController::class, 'hapus']);

    Route::resource('master/tanah', TanahController::class);
    Route::post('tanah/riwayat', [TanahController::class, 'riwayat']);
    Route::put('/tanah/update-riwayat/{riwayat}', [TanahController::class, 'riwayatUpdate']);
    Route::get('/tanah/delete-riwayat/{riwayat}', [TanahController::class, 'hapus']);

    Route::get('slide', [SlideController::class, 'index']);
    Route::post('slide', [SlideController::class, 'store']);
    Route::put('slide/{slide}', [SlideController::class, 'update']);
    Route::get('slide/delete/{slide}', [SlideController::class, 'destroy']);

    Route::get('bidang', [BidangController::class, 'index']);
    Route::post('bidang', [BidangController::class, 'store']);
    Route::put('bidang/{bidang}', [BidangController::class, 'update']);
    Route::get('bidang/delete/{bidang}', [BidangController::class, 'destroy']);
    
    
});
