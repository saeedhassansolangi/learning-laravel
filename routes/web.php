<?php

use Illuminate\Support\Facades\Route;


// "::" represents the Static Method
Route::get('/', function () {
    return view('welcome');
});
