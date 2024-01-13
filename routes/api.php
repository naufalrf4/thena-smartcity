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
    Route::post('/pelaporan', [App\Http\Controllers\PelaporanController::class, 'api_getpelaporan'])->name('pelaporan.api_getpelaporan');
    Route::get('/status-pelaporan', [App\Http\Controllers\PelaporanController::class, 'api_getstatuspelaporan'])->name('pelaporan.api_getstatuspelaporan');
    Route::post('/pelaporan-nearest', [App\Http\Controllers\PelaporanController::class, 'api_nearestpelaporan'])->name('pelaporan.api_nearestpelaporan');;
    Route::post('user/api-getuser', [App\Http\Controllers\UserController::class, 'api_getuser'])->name('user.api_getuser');
    Route::post('dinas/api-getdinas', [App\Http\Controllers\DinasController::class, 'api_getdinas'])->name('dinas.api_getdinas');
    // Route::get('/{id}', [App\Http\Controllers\PelaporanController::class, 'api_getpelaporan']);
    // Route::post('/', [App\Http\Controllers\PelaporanController::class, 'api_postpelaporan']);
    // Route::put('/{id}', [App\Http\Controllers\PelaporanController::class, 'api_putpelaporan']);
    // Route::delete('/{id}', [App\Http\Controllers\PelaporanController::class, 'api_deletepelaporan']);
});

