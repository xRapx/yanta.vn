<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;


Route::view('/', 'HTML_Layout_tinh.layout');
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');
Route::view('/logout', 'HTML_Layout_tinh.layout')->name('logout');

// Route::view('/admin', 'HTML_Layout_tinh.layout')->name('layout');

;
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('register', [RegisterController::class, 'register'])->name('register');
Route::post('logout', [LogoutController::class, 'logout'])->name('logout');

