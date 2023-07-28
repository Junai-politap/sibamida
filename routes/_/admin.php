<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\OpdController;
use Illuminate\Support\Facades\Route;




Route::get('/', [AdminController::class, 'dashboard']);

Route::resource('opd', OpdController::class);