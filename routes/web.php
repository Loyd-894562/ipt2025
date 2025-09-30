<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\CategoryController;

Route::get('/merchandise', [MerchandiseController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
// Route::get('/', function () {
//     return view('home');
// })->name('home');

// Route::get('/about', function () {
//     return view('pages.about');
// })->name('about');

// Route::get('/contact', function () {
//     return view('pages.contact');
// })->name('contact');
