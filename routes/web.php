<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{postId}', [PostController::class, 'show']);

Route::post('/posts/store', [PostController::class, 'store']);

Route::get('/posts/{postId}/edit', [PostController::class, 'edit']);
Route::put('/posts/{postId}', [PostController::class, 'update']);

Route::delete('/posts/{postId}', [PostController::class, 'delete']);
