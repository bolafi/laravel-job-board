<?php

use App\Http\Controllers\jobController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [indexController::class, 'index']);
Route::get('/about', [indexController::class, 'about']);
Route::get('/contact', [indexController::class, 'contact']);
Route::get('/job', [jobController::class, 'index']);

Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/create', [PostController::class, 'create']);
Route::get('/blog/delete', [PostController::class, 'delete']);
Route::get('/blog/{id}', [PostController::class, 'show']);

Route::get('/comments', [CommentController::class, 'index']);
Route::get('/comments/create', [CommentController::class, 'create']);

Route::get('/tags', [TagController::class, 'index']);
Route::get('/tags/create', [TagController::class, 'create']);
Route::get('/tags/test-many', [TagController::class, 'testManyToMany']);