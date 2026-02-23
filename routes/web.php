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

// search route
Route::get('/search', [PostController::class, 'search']);

// live search route
Route::get('/search/live', [PostController::class, 'liveSearch']);

// game list page 1 route
Route::get('/game-list', [PostController::class, 'gamelist'])->name('gamelist');

// game list page 2 route
Route::get('/game-list/{slug}', [PostController::class, 'gamelistIndex']);

// category page 1 route
Route::get('/category', [CategoryController::class, 'index'])->name('categories');

// category page 2 route
Route::get('/category/{slug}', [CategoryController::class, 'show']);

// middleware route
Route::middleware(['guest'])->group(function()
{
    // Route::get('register', [AuthController::class, 'registerForm'])->name('register.page');

    Route::get('login', [AuthController::class, 'loginForm'])->name('login.page');
});

// Route::post('register', [AuthController::class, 'register'])->name('register');

Route::post('login', [AuthController::class, 'login'])->name('login');

// admin page route
Route::get('admin', [AuthController::class, 'admin'])
    ->name('admin')
    ->middleware(['auth']);

// logout route
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// CRUD route
Route::resource('post', PostController::class);

// ambil data post berdasarkan slug
Route::get('/{post:slug}', [PostController::class, 'show'] );