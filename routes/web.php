<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product;


Route::get('/', function () {
    return view('home');
});

Route::get('/products',  [Product::class, 'index'] )->name('product.index');
Route::post('/products', [Product::class,'store'] )->name('product.store');

