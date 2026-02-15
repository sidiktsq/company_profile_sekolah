<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/academic', [PageController::class, 'academic'])->name('academic');
Route::get('/facilities', [PageController::class, 'facilities'])->name('facilities');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/sambutan', [PageController::class, 'sambutan'])->name('sambutan');

// Program Routes
Route::get('/rpl', [PageController::class, 'rpl'])->name('rpl');
Route::get('/tkr', [PageController::class, 'tkr'])->name('tkr');
Route::get('/tbsm', [PageController::class, 'tbsm'])->name('tbsm');

// Search Route
Route::get('/search', [PageController::class, 'search'])->name('search');
