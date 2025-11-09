<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\VorstandController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('vorstand', VorstandController::class);
