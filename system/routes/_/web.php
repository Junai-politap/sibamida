<?php

use App\Http\Controllers\Admin\JembatanController;
use App\Http\Controllers\Web\BaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BaseController::class, 'index']);
Route::get('master-aset/{opd}', [BaseController::class, 'aset']);
Route::get('contact', [BaseController::class, 'bahaya']);

Route::get('jembatan/{opd}', [BaseController::class, 'jembatan']);
Route::get('detail-jembatan/{jembatan}', [BaseController::class, 'showJembatan']);
Route::post('jembatan/{opd}/filter', [BaseController::class, 'filter']);

Route::get('bangunan/{opd}', [BaseController::class, 'bangunan']);
Route::get('detail-bangunan/{bangunan}', [BaseController::class, 'showBangunan']);

Route::get('peralatan/{opd}', [BaseController::class, 'peralatan']);
Route::get('detail-peralatan/{peralatan}', [BaseController::class, 'showPeralatan']);

Route::get('tanah/{opd}', [BaseController::class, 'tanah']);
Route::get('detail-tanah/{tanah}', [BaseController::class, 'showTanah']);

