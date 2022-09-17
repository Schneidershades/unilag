<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::get('/password', function () {
    return view('dashboard.changepassword');
})->name('password');

Route::get('/transactions', function () {
    return view('dashboard.transactions');
})->name('transactions');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/login-user', [HomeController::class, 'login'])->name('login-user');
Route::post('/register-user', [HomeController::class, 'register'])->name('register-user');

// Route::post('/register-user', [App\Http\Controllers\HomeController::class, 'register'])->name('register-user');
