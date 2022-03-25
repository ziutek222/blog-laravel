<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogiController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WeatherController;


Route::get('/', [HomeController::class, 'home']);
Route::get('/blog', [BlogController::class, 'blog']);
Route::get('/blog1', [BlogiController::class, 'blog1']);
Route::get('/blog2', [BlogiController::class, 'blog2']);
Route::get('/blog3', [BlogiController::class, 'blog3']);
Route::get('/blog4', [BlogiController::class, 'blog4']);
Route::get(' ', [PostController::class, 'show']);
Route::get('/contact', [ContactController::class, 'contact']);

Route::post('/emailsend', [ContactController::class, 'sendEmail'])->name('sendEmail');

Route::get('/weather', [WeatherController::class, 'weather']);

