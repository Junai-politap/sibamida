<?php

use App\Http\Controllers\Admin\JembatanController;
use App\Http\Controllers\Web\BaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BaseController::class, 'index']);
Route::get('master-aset/{opd}', [BaseController::class, 'aset']);
Route::get('contact', [BaseController::class, 'bahaya']);
Route::get('jembatan/{opd}', [BaseController::class, 'jembatan']);
Route::get('bangunan/{opd}', [BaseController::class, 'bangunan']);
Route::get('peralatan/{opd}', [BaseController::class, 'peralatan']);
Route::get('tanah/{opd}', [BaseController::class, 'tanah']);

Route::get('/generate-qr-code', [JembatanController::class, 'generateQRCode']);
