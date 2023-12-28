<?php

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


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group([
    'middleware' => ['auth:sanctum'],
], function () {
    Route::get('/pelaporan', [App\Http\Controllers\PelaporanController::class, 'api_getpelaporan'])->name('pelaporan.api_getpelaporan');
    // Route::get('/{id}', [App\Http\Controllers\PelaporanController::class, 'api_getpelaporan']);
    // Route::post('/', [App\Http\Controllers\PelaporanController::class, 'api_postpelaporan']);
    // Route::put('/{id}', [App\Http\Controllers\PelaporanController::class, 'api_putpelaporan']);
    // Route::delete('/{id}', [App\Http\Controllers\PelaporanController::class, 'api_deletepelaporan']);
});

