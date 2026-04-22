<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Ecommerce;
use App\Http\Controllers\FilmeController;

Route::get('/teste', function(){
    return view('teste');
});

// Route::get('/', [Ecommerce::class, 'index']);

Route::resource('filmes', FilmeController::class);
