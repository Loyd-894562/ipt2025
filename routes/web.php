<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;


Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/merchandise', [MerchandiseController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/layouts', function () {
    return view('layouts.app');
})->name('app');

Route::get('/components', function () {
    return view('component.index');
})->name('index');