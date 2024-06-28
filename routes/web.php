<?php

use App\Http\Controllers\AdminControllers\AdminController;
use App\Http\Controllers\AuthControllers\AuthController;
use App\Http\Controllers\FrontControllers\FrontController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {
    Route::get('register', [AuthController::class, 'register'])->name('auth.register');
    Route::get('login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('user-register', [AuthController::class, 'user_register'])->name('auth.user.register');
    Route::post('user-login', [AuthController::class, 'user_login'])->name('auth.user.login');
});

Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::middleware('admin')->group(function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});



Route::get('/', [FrontController::class, 'index'])->name('front.home');
Route::get('/about', [FrontController::class, 'about'])->name('front.about');
Route::get('/shop', [FrontController::class, 'shop'])->name('front.shop');
