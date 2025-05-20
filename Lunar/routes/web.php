<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\criarController;
use App\Http\Controllers\reservaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('reservaController', reservaController::class);

Route::get('/Lunar', [welcomeController::class, 'Welcome'])->name('Welcome');
Route::get('/site', [ProductController::class, 'site'])->name('site.create');
Route::get('/criar', [criarController::class, 'criar'])->name('criar');