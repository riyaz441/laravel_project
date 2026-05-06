<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome', ['name' => request('name', 'Guest')]);
});
// Protected Routes (require authentication)
Route::middleware('auth')->group(function () {
    Route::resource('ideas', IdeaController::class);
    Route::get('/ideas', [IdeaController::class, 'index'])->name('ideas.index');
    Route::get('/ideas/{idea}', [IdeaController::class, 'show'])->name('ideas.show');
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});

Route::middleware('guest')->group(function () {
    Route::get('/about', function () {
        return view('about');
    });

    Route::view('/contact', 'contact');

    // Authentication Routes
    Route::get('/register', [AuthController::class, 'showRegister'])->name('auth.register.form');
    Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::get('/login', [AuthController::class, 'showLogin'])->name('auth.login.form');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
});
