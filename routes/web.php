<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AdminController;


Route::view('/', 'index');
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');
Route::view('/logout', 'index')->name('logout');
Route::view('/admin', 'admin')->name('admin');

Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('register', [RegisterController::class, 'register'])->name('register');
Route::post('logout', [LogoutController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin.admin');
});

