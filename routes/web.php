<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'BGF Foundation'
    ]);
})->name('home');

Route::get('/about', function () {
    return view('about', [
        'title' => 'About Us | BGF Foundation'
    ]);
})->name('about');
