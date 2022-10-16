<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashboard\PaymentController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\PasswordController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\TransactionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/payments', [PaymentController::class, 'index'])->name('payments');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::get('/password', [PasswordController::class, 'index'])->name('password.index');

Route::post('/password', [PasswordController::class, 'store'])->name('password.store');

Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/login-user', [HomeController::class, 'login'])->name('login-user');

Route::post('/register-user', [HomeController::class, 'register'])->name('register-user');
