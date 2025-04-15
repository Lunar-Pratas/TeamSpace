<?php

use App\Http\Controllers\TestConroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Lunar', [LunarController::class, 'Lunar'])->name('Lunar');
