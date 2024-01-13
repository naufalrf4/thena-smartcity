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

Route::get('/', [App\Http\Controllers\PublicController::class, 'index']);
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'root'])->name('dashboard.index');

// ===== PELAPORAN ===== 
Route::get('pelaporan/status/belum-ditangani', [App\Http\Controllers\PelaporanController::class, 'index'])->name('pelaporan.belum_ditangani');
Route::get('pelaporan/status/sedang-ditangani', [App\Http\Controllers\PelaporanController::class, 'index'])->name('pelaporan.sedang_ditangani');
Route::get('pelaporan/status/selesai', [App\Http\Controllers\PelaporanController::class, 'index'])->name('pelaporan.selesai');
Route::resource('pelaporan', App\Http\Controllers\PelaporanController::class);

Route::resource('petugas-diassign', App\Http\Controllers\PetugasDiassignController::class);
Route::resource('log-pelaporan', App\Http\Controllers\LogPelaporanController::class);

// ===== USER ===== 
Route::resource('user', App\Http\Controllers\UserController::class);

// ===== DINAS ===== 
Route::resource('dinas', App\Http\Controllers\DinasController::class);

// ===== PROFILE ===== 
Route::resource('profile', App\Http\Controllers\ProfileController::class);

// untuk buka halaman dari template
Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
