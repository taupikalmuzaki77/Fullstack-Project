<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index']);

Route::get('/latest', [PostController::class, 'latest']);

Route::get('/search', [PostController::class, 'search']);

Route::get('/game-list', [PostController::class, 'gamelist']);

Route::get('/category', [CategoryController::class, 'index']);

Route::get('/category/{slug}', [CategoryController::class, 'show']);

Route::get('/about', function()
{
    return view('about');
});

Route::get('/contact', function()
{
    return view('contact');
});

Route::get('/privacy-policy', function()
{
    return view('privacypolicy');
});

Route::middleware(['guest'])->group(function()
{
    // Route::get('register', [AuthController::class, 'registerForm'])->name('register.page');

    Route::get('login', [AuthController::class, 'loginForm'])->name('login.page');
});

// Route::post('register', [AuthController::class, 'register'])->name('register');

Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('admin', [AuthController::class, 'admin'])
    ->name('admin')
    ->middleware(['auth']);

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('post', PostController::class);

Route::get('/{post:slug}', [PostController::class, 'show'] );