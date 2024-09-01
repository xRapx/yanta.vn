<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::view('/', 'index');
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');
Route::view('/admin', 'HTML_Layout_tinh.layout')->name('layout');


Route::prefix('backend')->name('backend')->group(function() {
    Route::post('login', [LoginController::class, 'login'])->name('backend.login');
    Route::post('register', [RegisterController::class, 'register'])->name('backend.register');
});
    
