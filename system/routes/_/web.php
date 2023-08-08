<?php

use App\Http\Controllers\Web\BaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BaseController::class, 'index']);
Route::get('assets/{opd}', [BaseController::class, ' entah']);
Route::get('contact', [BaseController::class, 'bahaya']);
