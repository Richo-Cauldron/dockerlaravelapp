<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::view('/', 'welcome')->name('home');

//  ######## App Routes ############ //

Route::get('/plp', [PostController::class, 'home']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{post}', [PostController::class, 'show']);

Route::get('/posts/{post}/comments', [CommentController::class, 'index']);

Route::get('/posts/{post}/comments/{comment}', [CommentController::class, 'show']);



