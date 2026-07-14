<?php

use App\Http\Controllers\SessionsController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');
Route::view('/about', 'about')->name('about');

Route::middleware('auth')->group(function () {
    Route::get('/articles', [ArticleController::class, 'index']);
    Route::get('/articles/create', [ArticleController::class, 'create']);
    Route::post('/articles', [ArticleController::class, 'store']);
    Route::get('/articles/{Article}', [ArticleController::class, 'show']);
    Route::get('/articles/{Article}/edit', [ArticleController::class, 'edit']);
    Route::patch('/articles/{Article}', [ArticleController::class, 'update'])->can('update');
    Route::delete('/articles/{Article}', [ArticleController::class, 'destroy']);
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
});

Route::post('/sessions', [SessionsController::class, 'store'])->middleware('guest');
Route::delete('/sessions', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('/users/{User}/profile', [RegisteredUserController::class, 'edit'])->middleware('auth');
Route::patch('/users/{User}', [RegisteredUserController::class, 'update'])->middleware('auth');