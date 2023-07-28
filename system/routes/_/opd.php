<?php

use App\Http\Controllers\Opd\OpdController;
use App\Http\Controllers\Opd\PegawaiController;
use Illuminate\Support\Facades\Route;




Route::get('/', [OpdController::class, 'index']);
Route::resource('pegawai', PegawaiController::class);
