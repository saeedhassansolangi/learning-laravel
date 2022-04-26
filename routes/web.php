<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


// // "::" represents the Static Method
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', PostController::class . '@index');
Route::get('/posts/edit', PostController::class . '@edit_post');
Route::get('/posts/{postId}', PostController::class . '@show_post');
Route::get('/contact', PostController::class . '@contact');
Route::get('/php', PostController::class . '@php_code');
