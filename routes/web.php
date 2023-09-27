<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/posts',[PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');


Route::post('/posts/delete/{id}', [PostController::class, 'destroy']) ->name('posts.destroy');


Route::post('/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');


Route::post('/posts/update/{id}', [PostController::class, 'update'])->name('posts.update');