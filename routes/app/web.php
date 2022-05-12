<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\LockerController;
use App\Http\Controllers\Web\DashboardController;

Route::group(['domain' => ''], function () {
    Route::get('auth', [AuthController::class, 'index'])->name('auth.index');
    Route::prefix('')->name('web.')->group(function () {
        Route::prefix('auth')->name('auth.')->group(function () {
            Route::post('login', [AuthController::class, 'do_login'])->name('login');
            Route::post('register', [AuthController::class, 'do_register'])->name('register');
        });
        Route::middleware(['auth:web'])->group(function () {
            Route::redirect('/', 'dashboard', 301);
            Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
            Route::resource('locker', LockerController::class);
            Route::get('logout', [AuthController::class, 'do_logout'])->name('auth.logout');
        });
    });
});
