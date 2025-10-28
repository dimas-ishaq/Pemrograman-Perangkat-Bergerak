<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('home');
});

Route::get('/products',  [ProductController::class, 'index'] )->name('product.index');
Route::post('/products', [ProductController::class,'store'] )->name('product.store');

