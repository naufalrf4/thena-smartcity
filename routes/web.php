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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'root']);

Route::get('pelaporan/status/belum-ditangani', [App\Http\Controllers\PelaporanController::class, 'index'])->name('pelaporan.belum_ditangani');
Route::get('pelaporan/status/sedang-ditangani', [App\Http\Controllers\PelaporanController::class, 'index'])->name('pelaporan.sedang_ditangani');
Route::get('pelaporan/status/selesai', [App\Http\Controllers\PelaporanController::class, 'index'])->name('pelaporan.selesai');
Route::resource('pelaporan', App\Http\Controllers\PelaporanController::class);

// untuk buka halaman dari template
Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
