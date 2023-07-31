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
Route::post('riwayat', [JembatanDanJalanController::class, 'riwayat']);
Route::put('/update-riwayat/{riwayat}', [JembatanDanJalanController::class, 'riwayatUpdate']);
Route::get('/delete-riwayat/{riwayat}', [JembatanDanJalanController::class, 'hapus']);

Route::resource('master/peralatan-mesin', PeralatanDanMesinController::class);
Route::post('riwayat', [PeralatanDanMesinController::class, 'riwayat']);
Route::put('/update-riwayat/{riwayat}', [PeralatanDanMesinController::class, 'riwayatUpdate']);
Route::get('/delete-riwayat/{riwayat}', [PeralatanDanMesinController::class, 'hapus']);

Route::resource('master/bangunan', BangunanController::class);
Route::resource('master/tanah', TanahController::class);

});