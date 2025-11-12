<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('home');
});

Route::get('/products',  [ProductController::class, 'index'] )->name('product.index');
Route::post('/products', [ProductController::class,'store'] )->name('product.store');

Route::get('/categories',  [CategoryController::class, 'index'] )->name('category.index');
Route::post('/categories',  [CategoryController::class, 'store'] )->name('category.store');