<?php

use App\Http\Controllers\Admin\JembatanController;
use App\Http\Controllers\Web\BaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BaseController::class, 'index']);
Route::get('assets/{opd}', [BaseController::class, 'aset']);
Route::get('contact', [BaseController::class, 'bahaya']);

Route::get('/generate-qr-code', [JembatanController::class, 'generateQRCode']);