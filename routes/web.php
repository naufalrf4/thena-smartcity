<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PelaporanController;
use App\Http\Controllers\PetugasDiassignController;
use App\Http\Controllers\LogPelaporanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DinasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\PublicController;

// Public Routes
Route::get('/', [PublicController::class, 'index'])->name('home');

// Auth Routes
Route::get('/login', [Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [Auth\LoginController::class, 'login']);
Route::post('/logout', [Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/register', [Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [Auth\RegisterController::class, 'register']);

// Authorized
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'root'])->name('dashboard.index');

    Route::resource('pelaporan', PelaporanController::class);
    Route::get('pelaporan/status/belum-ditangani', [PelaporanController::class, 'index'])->name('pelaporan.belum_ditangani');
    Route::get('pelaporan/status/sedang-ditangani', [PelaporanController::class, 'index'])->name('pelaporan.sedang_ditangani');
    Route::get('pelaporan/status/perlu-direview', [PelaporanController::class, 'index'])->name('pelaporan.perlu_direview');
    Route::get('pelaporan/status/selesai', [PelaporanController::class, 'index'])->name('pelaporan.selesai');

    Route::resource('petugas-diassign', PetugasDiassignController::class);
    Route::resource('log-pelaporan', LogPelaporanController::class);
    Route::resource('user', UserController::class);
    Route::resource('dinas', DinasController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('chat', ChatController::class);
});
