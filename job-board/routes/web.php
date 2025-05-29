<?php

use App\Http\Controllers\jobController;
use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [indexController::class, 'index']);
Route::get('/about', [indexController::class, 'about']);
Route::get('/contact', [indexController::class, 'contact']);

Route::get('/job', [jobController::class, 'index']);