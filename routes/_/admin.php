<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\OpdController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:admin'], function () {
    
    Route::get('/', [AdminController::class, 'dashboard']);
    Route::resource('admin', AdminController::class);
    Route::resource('opd', OpdController::class);
});
