<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\LockerController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GenerateController;
use App\Http\Controllers\Admin\KirimPesanController;
use App\Http\Controllers\Admin\PesanController;

Route::group(['domain' => ''], function () {
    Route::redirect('admin', 'admin/dashboard', 301);
    Route::get('admin/auth', [AuthController::class, 'index'])->name('auth.index');
    Route::prefix('admin/')->name('admin.')->group(function () {
        Route::prefix('auth')->name('auth.')->group(function () {
            Route::post('login', [AuthController::class, 'do_login'])->name('login');
        });
        Route::middleware(['auth:admin'])->group(function () {
            Route::redirect('/', 'dashboard', 301);
            Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
            Route::resource('locker', LockerController::class);
            Route::resource('student', StudentController::class);
            Route::get('logout', [AuthController::class, 'do_logout'])->name('auth.logout');
            Route::get('mengenerate', [GenerateController::class, 'index'])->name('generate.index');
            Route::get('kirimpesan', [KirimPesanController::class, 'index'])->name('kirimpesan.index');
            Route::get('pesan', [PesanController::class, 'index'])->name('pesan.index');
            
        });
    });
});
