<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home');
});

Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->middleware('redirect.auth')->name("login");
    Route::post('/login', [AuthController::class, 'loginAuth'])->name('login.auth');
    Route::get('/register', [AuthController::class, 'register'])->name("register");
    Route::post('/register', [AuthController::class, 'registerAuth'])->name("register.auth");
});

Route::get("/reset-password", [AuthController::class, 'resetPassword'])->name('reset-password');

Route::middleware(['auth'])->group(function () {

    Route::middleware(['auth', 'role:admin'])->group(function () {

        Route::prefix('/admin', )->group(function () {

            Route::get("/dashboard", function () {
                return view("admin.dashboard.index");
            })->name("admin.dashboard");

            Route::get('/users', function () {
            })->name('admin.users');

            Route::get('/products', [ProductController::class, 'index'])->name('products.index');
            Route::post('/products', [ProductController::class, 'store'])->name('products.store');

            Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
            Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
            Route::delete('/categories/{id}',[CategoryController::class,'destroy'])->name('category.destroy');

        });

    });

    Route::middleware(['auth', 'role:user'])->group(function () {
        Route::get("/user", function () {
            return view("user.dashboard.index");
        })->name("user.dashboard");

    });
});

