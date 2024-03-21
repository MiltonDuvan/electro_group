<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])-> name('home.index');

Route::get('/toGoBestSeller', function () {
    return view('best_seller_page');
})->name('page1');

Route::get('/toGoRecommended', function () {
    return view('recommended_page');
})->name('page2');
