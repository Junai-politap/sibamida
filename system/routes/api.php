<?php

use App\Http\Controllers\API\OpdResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* 
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('opd/{id}', [OpdResource::class, 'getPegawai']);
Route::get('opd-kategori/{id}', [OpdResource::class, 'getKategori']);
Route::get('opd-bidang/{id}', [OpdResource::class, 'getBidang']);
Route::get('opd-kondisi/{id}', [OpdResource::class, 'getKondisi']);
Route::get('opd-ruangan/{id}', [OpdResource::class, 'getRuangan']);