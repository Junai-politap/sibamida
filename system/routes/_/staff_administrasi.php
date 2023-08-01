<?php

use App\Http\Controllers\Staff\BangunanController;
use App\Http\Controllers\Staff\JembatanDanJalanController;
use App\Http\Controllers\Staff\KategoriController;
use App\Http\Controllers\Staff\PeralatanDanMesinController;
use App\Http\Controllers\Staff\RuanganController;
use App\Http\Controllers\Staff\StaffController;
use App\Http\Controllers\Staff\TanahController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:staff'], function () {

Route::get('/', [StaffController::class, 'index']);

Route::resource('ruangan', RuanganController::class);
Route::resource('kategori', KategoriController::class);

Route::resource('master/jembatan-jalan', JembatanDanJalanController::class);
Route::post('jembatan-jalan/riwayat', [JembatanDanJalanController::class, 'riwayat']);
Route::put('/jembatan-jalan/update-riwayat/{riwayat}', [JembatanDanJalanController::class, 'riwayatUpdate']);
Route::get('/jembatan-jalan/delete-riwayat/{riwayat}', [JembatanDanJalanController::class, 'hapus']);

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

});