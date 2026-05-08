<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'pages.dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
