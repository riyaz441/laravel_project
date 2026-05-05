<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdeaController;

Route::get('/', function () {
    return view('welcome', ['name' => request('name', 'Guest')]);
});

Route::get('/about', function () {
    return view('about');
});

Route::view('/contact', 'contact');

Route::resource('ideas', IdeaController::class);
