<?php

use App\Http\Controllers\Blog\PostsController as BlogPostsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WelcomeController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/blog/posts/{post}', [BlogPostsController::class, 'show'])->name('blog.show');

Auth::routes();

Route::middleware(['auth'])->group(function() {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::resource('categories', 'App\Http\Controllers\CategoriesController');

    Route::resource('posts', 'App\Http\Controllers\PostsController');

    Route::resource('tags', 'App\Http\Controllers\TagsController');

    Route::get('removed-posts', [PostsController::class, 'removed'])->name('removed-posts.index');

    Route::put('restore-post/{post}', [PostsController::class, 'restore'])->name('restore-posts');
});

Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('users', [UsersController::class, 'index'])->name('users.index');

    Route::get('users/profile', [UsersController::class, 'edit'])->name('users.edit-profile');

    Route::put('users/profile', [UsersController::class, 'update'])->name('users.update-profile');

    Route::post('users/{user}/make-admin', [UsersController::class, 'makeAdmin'])->name('users.make-admin');
});
