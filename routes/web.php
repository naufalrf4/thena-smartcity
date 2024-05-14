<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PelaporanController;
use App\Http\Controllers\PetugasDiassignController;
use App\Http\Controllers\LogPelaporanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DinasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\PublicController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)->name('verification.notice');
    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');
    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');
    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);
    Route::put('password', [PasswordController::class, 'update'])->name('password.update');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

// Public Routes
Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/news', [BeritaController::class, 'index'])->name('news');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Authorized Routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'root'])->name('dashboard.index');
    Route::resource('pelaporan', PelaporanController::class);
    Route::get('pelaporan/status/belum-ditangani', [PelaporanController::class, 'belum_ditangani'])->name('pelaporan.belum_ditangani');
    Route::get('pelaporan/status/sedang-ditangani', [PelaporanController::class, 'sedang_ditangani'])->name('pelaporan.sedang_ditangani');
    Route::get('pelaporan/status/perlu-direview', [PelaporanController::class, 'perlu_direview'])->name('pelaporan.perlu_direview');
    Route::get('pelaporan/status/selesai', [PelaporanController::class, 'selesai'])->name('pelaporan.selesai');
    Route::resource('petugas-diassign', PetugasDiassignController::class);
    Route::resource('log-pelaporan', LogPelaporanController::class);
    Route::resource('user', UserController::class);
    Route::resource('dinas', DinasController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('chat', ChatController::class);
});

// Catch-all route
Route::get('/{name}', function ($name) {
    return view("$name");
})->where('name', '.*');
