<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\LockerController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\GenerateController;
use App\Http\Controllers\Admin\DashboardController;

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
            // Route::resource('locker', LockerController::class);
            Route::get('locker', [LockerController::class, 'index'])->name('locker.index');
            Route::get('locker/{locker}', [LockerController::class, 'show'])->name('locker.show');
            Route::get('generate', [GenerateController::class, 'index'])->name('generate.index');
            // Route::resource('message', MessageController::class);
            Route::get('message/{user}', [MessageController::class, 'index'])->name('message.index');
            Route::post('message', [MessageController::class, 'store'])->name('message.store');
            // Route::get('message/{message}', [MessageController::class, 'show'])->name('message.show');
            Route::get('logout', [AuthController::class, 'do_logout'])->name('auth.logout');
        });
    });
});
