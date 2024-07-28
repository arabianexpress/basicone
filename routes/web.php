<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContendController;

Route::view('/', 'welcome');

Route::get('contends', [ContendController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('contends'); 

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
