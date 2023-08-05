<?php

use App\Http\Controllers\Web\BaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BaseController::class, 'index']);