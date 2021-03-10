<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get(
    '/home',
    [App\Http\Controllers\HomeController::class, 'index']
)->name('home');


Route::get(
    '/profile',
    [ProfileController::class, 'index']
)->name('profile');

Route::get(
    '/book/create',
    [BookController::class, 'index']
)->name('book');
