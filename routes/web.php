<?php

use App\Http\Controllers\PostControllerResources;
use Illuminate\Support\Facades\Route;


// // "::" represents the Static Method
// Route::get('/', function () {
//     return view('welcome');
// });


// php artisan route:list (list out all the route methods)
Route::resource('/posts', PostControllerResources::class);
