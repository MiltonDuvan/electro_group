<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])-> name('home.index');

Route::get('/goToBestSeller', function () {
    return view('best_seller_page');
})->name('page1');

Route::get('/goToRecommended', function () {
    return view('recommended_page');
})->name('page2');

Route::get('/goToRegister', function () {
    return view('register_page');
})->name('page3');