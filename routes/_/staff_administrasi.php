<?php

use App\Http\Controllers\Staff\StaffController;
use Illuminate\Support\Facades\Route;




Route::get('/', [StaffController::class, 'index']);