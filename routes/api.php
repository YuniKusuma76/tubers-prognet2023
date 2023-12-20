<?php

use App\Http\Controllers\API\AgamaApiController;
use App\Http\Controllers\API\AnggotakkApiController;
use App\Http\Controllers\API\AuthApiController;
use App\Http\Controllers\API\HubungankkApiController;
use App\Http\Controllers\API\KkApiController;
use App\Http\Controllers\API\PendudukApiController;
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

// Authentikasi
Route::post('register', [AuthApiController::class, 'register']);
Route::post('login', [AuthApiController::class, 'login']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Master Data
Route::apiResource('/agama', AgamaApiController::class);
Route::apiResource('/kk', KkApiController::class);

//Transaksi
Route::apiResource('/hubungankk', HubungankkApiController::class);
Route::apiResource('/penduduk', PendudukApiController::class);
Route::apiResource('/anggotakk', AnggotakkApiController::class);
