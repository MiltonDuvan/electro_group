<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/home', [HomeController::class, 'home'])->name('home_page');
Route::get('/bestseller', [HomeController::class, 'goToBestSeller'])->name('best_seller_page');
Route::get('/login', [HomeController::class, 'goToLogin'])->name('login');
Route::get('/product detail',[HomeController::class, 'goToProductDetail'])->middleware('auth')->name('product_detail_page');

// Register and Login

Route::get('/register', [UserController::class, 'goToRegister'])->name('register_page');
Route::post('/confirm_registration',[UserController::class, 'register'])->name('confirm_registration');
Route::get('/confirm_logout',[UserController::class, 'logout'])->name('confirm_logout');
Route::post('/confirm_login',[UserController::class, 'login'])->name('confirm_login');