<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.home');
})->name('dashboard');

Route::get('/profile', function () {
    return view('dashboard.profile');
});

Route::get('/password', function () {
    return view('dashboard.changepassword');
});

Route::get('/transactions', function () {
    return view('dashboard.transactions');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/login-user', [HomeController::class, 'login'])->name('login-user');
Route::post('/register-user', [HomeController::class, 'register'])->name('register-user');

// Route::post('/register-user', [App\Http\Controllers\HomeController::class, 'register'])->name('register-user');
