<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

// // "::" represents the Static Method
// Route::get('/', function () {
//     return view('welcome');
// });


// ---- Controllers ----------------------
// Route::get("/url", "Name_Of_The_Controller")

// class PostController extends Controller
// Route::get("/posts", 'ClassName@NameOfTheMethodThatWeWantToAccessWhenWeVisitThisRoute');

// Route::get('/posts', 'PostController@index');
Route::get('/posts', PostController::class . '@index');
// Route::get('/posts', \App\Http\Controllers\PostController::class . '@index');

Route::get("/admin", PostController::class . '@myName');

// Passing data to the Controller
Route::get("/greet/{username}", PostController::class . '@greet');

// Passing Multiple Data to the Controller
Route::get("/posts/{postId}/comments/", PostController::class . '@getPostComments');
Route::get("/posts/{postId}/{username}/", PostController::class . '@getPostUsername');
Route::get("/posts/{postId}/comments/{commentId}/", PostController::class . '@getSpecificComment');
