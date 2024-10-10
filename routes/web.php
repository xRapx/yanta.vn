<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceFiveController;
use App\Http\Controllers\ServiceFourController;
use App\Http\Controllers\ServiceOneController;
use App\Http\Controllers\ServiceSixController;
use App\Http\Controllers\ServiceThreeController;
use App\Http\Controllers\ServiceTwoController;
use App\Http\Controllers\UserController;
use App\Mail\MyTestEmail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

Route::get('/', [IndexController::class , 'index'])->name('homepage');
Route::get('/about', [IndexController::class , 'about'])->name('about');
Route::get('/blog', [IndexController::class , 'blog'])->name('blog');
Route::get('/service',[IndexController::class , 'service'])->name('service');
Route::get('/contact', [IndexController::class , 'contact'])->name('contact');

// services details
Route::resource('service1', ServiceOneController::class);
Route::resource('service2', ServiceTwoController::class);
Route::resource('service3', ServiceThreeController::class);
Route::resource('service4', ServiceFourController::class);
Route::resource('service5', ServiceFiveController::class);
Route::resource('service6', ServiceSixController::class);

// blog details
Route::get('/blog/details', function () {return view('pages.details.blog');})->name('blog.details');
// Route::get('/blog/details/{id}', [PostController::class, 'blog_show'])->name('blog.show');
//  =>>>>>>>>>>>> End details blog



Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::resource('register', RegisterController::class);
Route::get('logout', [LogoutController::class, 'logout'])->name('logout');

// admin dashboard
Route::prefix('admin')->middleware('admin')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin.admin');
    
    // users details
    Route::get('/users', [UserController::class, 'index'])->name('user.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/users/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/users/details/{id}', [UserController::class, 'show'])->name('user.details');
    Route::put('/users/details/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/users/details/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('/users/filter/{category}', [UserController::class, 'filter'])->name('user.filter');

    
    // Posts details
    // Route::resource('posts', PostController::class);
    Route::get('/post', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::get('/posts/details/{id}', [PostController::class, 'show'])->name('posts.show');
    Route::put('/posts/update/{id}', [PostController::class, 'update'])->name('posts.update');
    Route::post('/posts/edit/{id}', [PostController::class,'edit'])->name('posts.edit');
    Route::post('/posts/destroy/{id}', [PostController::class,'destroy'])->name('posts.destroy');

    // services
    // Route::get('/services', [ServiceController::class ,'index']) ->name('services.index');
    // Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
    // Route::get('/services/details/{id}', [ServiceController::class, 'show'])->name('services.show');
    // Route::put('/services/update/{id}', [ServiceController::class, 'update'])->name('services.update');
    // Route::post('/services/edit/{id}', [ServiceController::class,'edit'])->name('services.edit');
    // Route::post('/services/destroy/{id}', [ServiceController::class,'destroy'])->name('services.destroy');

    // images
    Route::get('/gallery', [GalleryController::class ,'index']) ->name('gallery.index');
    Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('/gallery/upload', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/gallery/details/{id}', [GalleryController::class, 'show'])->name('gallery.show');
    Route::put('/gallery/update/{id}', [GalleryController::class, 'update'])->name('gallery.update');
    Route::post('/gallery/edit/{id}', [GalleryController::class,'edit'])->name('gallery.edit');
    Route::post('/gallery/destroy/{id}', [GalleryController::class,'destroy'])->name('gallery.destroy');

    // Email
    Route::get('/email', [EmailController::class, 'index'])->name('email.index');
    Route::get('/email/create', [EmailController::class, 'sendEmail'])->name('email.create');
    Route::get('/email/details/{id}', [EmailController::class, 'show'])->name('email.show');
    Route::put('/email/update/{id}', [EmailController::class, 'update'])->name('email.update');
    Route::post('/email/edit/{id}', [EmailController::class,'edit'])->name('email.edit');
    Route::post('/email/destroy/{id}', [EmailController::class,'destroy'])->name('email.destroy');
}); 





