<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();


Route::middleware(['auth'])->group(function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('categories', 'App\Http\Controllers\CategoriesController');

    Route::resource('posts', 'App\Http\Controllers\PostsController');

    Route::resource('tags', 'App\Http\Controllers\TagsController');

    Route::get('removed-posts', [App\Http\Controllers\PostsController::class, 'removed'])->name('removed-posts.index');

    Route::put('restore-post/{post}', [App\Http\Controllers\PostsController::class, 'restore'])->name('restore-posts');
    });
