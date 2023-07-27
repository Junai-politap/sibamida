<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('admin')->group(function(){
    include "_/admin.php";
});

Route::prefix('opd')->group(function(){
    include "_/opd.php";
});

Route::prefix('staff-administrasi')->group(function(){
    include "_/staff_administrasi.php";
});