<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['name' => request('name', 'Guest')]);
});

Route::get('/about', function () {
    return view('about');
});

Route::view('/contact', 'contact');

Route::get('/idea', function () {
    return view('idea');
});
