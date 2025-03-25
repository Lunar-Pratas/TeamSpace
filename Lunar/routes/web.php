<?php

use App\Http\Controllers\TestConroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
route::get('/', [TestConroller::class, 'index']); // Pagina inicial 
