<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/**
 * Фасад поддерживает почти все основные методы HTTP-запросов:
 * Route::get, post, put, patch, delete
 * Можно немного переработать наименования маршрутов для болшего комфорта.
 */

Route::get('/', function () {
    return view('home');
});

Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories');

Route::get('/categories/{id}/posts', [CategoryController::class, 'show'])
    ->name('categories.posts');

Route::get('/posts', [PostController::class, 'index'])
    ->name('posts');

Route::get('/posts/{id}', [PostController::class, 'show'])
    ->name('posts.show');

