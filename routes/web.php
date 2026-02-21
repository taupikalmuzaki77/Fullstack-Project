<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// homepage route
Route::get('/', [PostController::class, 'index'])->name('homepage');

// about page route
Route::view('/about', 'about')->name('about');

// contact page route
Route::view('/contact', 'contact')->name('contact');

// privacy policy page route
Route::view('/privacy-policy', 'privacypolicy')->name('privacy-policy');

// latest posts route
Route::get('/latest', [PostController::class, 'latest'])->name('latestposts');

Route::get('/search', [PostController::class, 'search']);

// game list route
Route::get('/game-list', [PostController::class, 'gamelist'])->name('gamelist');

Route::get('/game-list/{slug}', [PostController::class, 'gamelistIndex']);

// category routes
Route::get('/category', [CategoryController::class, 'index'])->name('categories');

Route::get('/category/{slug}', [CategoryController::class, 'show']);

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