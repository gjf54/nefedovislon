<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories');

Route::get('/posts', [PostController::class, 'index'])
    ->name('posts');

Route::get('/posts/{id}', [PostController::class, 'show'])
    ->name('posts.show');
