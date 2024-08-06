<?php

use App\Http\Controllers\AdminProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WBTBController;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Login dan Logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Reset Password
Route::get('/password/reset', [AuthController::class, 'showResetPasswordForm'])->name('password.request');
Route::post('/password/email', [AuthController::class, 'sendResetPasswordEmail'])->name('password.email');
Route::get('/password/reset/{token}', [AuthController::class, 'showNewPasswordForm'])->name('password.reset');
Route::post('/password/reset', [AuthController::class, 'resetPassword'])->name('password.update');

// Rute untuk masyarakat (tanpa login)
Route::prefix('masyarakat')->group(function() {
    Route::get('/', [MasyarakatController::class, 'index'])->name('masyarakat.index');
    Route::get('/masyarakat/wbtb/{id}', [WBTBController::class, 'showDetails'])->name('masyarakat.wbtb.detail');



    // Rute untuk pengajuan masyarakat (tanpa login)
    Route::get('/pengajuan', [PengajuanController::class, 'indexMasyarakat'])->name('masyarakat.pengajuan.index');
    Route::get('/pengajuan/create', [PengajuanController::class, 'createMasyarakat'])->name('masyarakat.pengajuan.create');
    Route::post('/pengajuan', [PengajuanController::class, 'storeMasyarakat'])->name('masyarakat.pengajuan.store');
});

// Rute untuk admin (login required)
Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');
    Route::get('/admin/profile', [AdminProfileController::class, 'show'])->name('admin.profile');
    Route::post('/admin/profile', [AdminProfileController::class, 'update'])->name('admin.updateProfile');

    // Rute pengajuan admin
    Route::get('/pengajuans', [PengajuanController::class, 'indexAdmin'])->name('admin.pengajuans.index');
    Route::get('/admin/pengajuans/{id}', [PengajuanController::class, 'showAdmin'])->name('admin.pengajuans.show');
    Route::patch('/pengajuan/{id}/update-status', [PengajuanController::class, 'updateStatus'])->name('admin.pengajuans.updateStatus');

    // Rute untuk resources admin
    Route::resource('wbtb', WBTBController::class);
    
});


// Rute galeri
Route::prefix('galeri')->group(function() {
    Route::get('/{id}', [GalleryController::class, 'show'])->name('galeri.show');
    Route::resource('galleries', GalleryController::class);
});
