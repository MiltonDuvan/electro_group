<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

//Home
Route::get('/home', [HomeController::class, 'home'])->name('home_page');
Route::get('/bestseller', [HomeController::class, 'goToBestSeller'])->name('best_seller_page');
Route::get('/login', [HomeController::class, 'goToLogin'])->name('login');
Route::get('/product detail', [HomeController::class, 'goToProductDetail'])->middleware('auth')->name('product_detail_page');
Route::get('/product add', [HomeController::class, 'goToProductAdd'])->name('product_add_page');

// Register and Login

Route::get('/register', [UserController::class, 'goToRegister'])->name('register_page');
Route::post('/confirm_registration', [UserController::class, 'register'])->name('confirm_registration');
Route::get('/confirm_logout', [UserController::class, 'logout'])->name('confirm_logout');
Route::post('/confirm_login', [UserController::class, 'login'])->name('confirm_login');

// Products
Route::get('/manage_products', [ProductController::class, 'index'])->name('manage_products_page');
Route::post('/product_confirm', [ProductController::class, 'store'])->name('product_confirm');
Route::get('/edit_product/{id}', [ProductController::class, 'edit'])->name('edit_product_page');
Route::put('/update_product/{id}', [ProductController::class, 'update'])->name('update_product');
Route::delete('/destroy_product/{id}', [ProductController::class, 'destroy'])->name('destroy_product');
