<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Here "Route" is the class name, and this "::" shows that we have the Static Method after that

// "::" represents the Static Method
Route::get('/', function () {
    return view('welcome');
});


// When we visit the '/example' url than this callback function will be called
Route::get("/example", function () {
    return 'example route';
});


// http://localhost:3000/about
Route::get("/about", function () {
    return "<h2>About Page</h2>";
});

// http://localhost:3000/contact
Route::get("/contact", function () {
    return "<h2>Contact Page</h2>";
});


//http://localhost:3000/admin/posts
Route::get('/admin/posts', function () {
    return "<p style='color:dodgerblue; font-size:30px; text-align:center'>
                 Admin posts will be here
            </p>";
});


// ---------- Dynamic Routes -----------------------
// http://localhost:3000/user/Saeed Hassan
Route::get('/user/{username}', function ($username) {
    return "<h1>Hello, ${username}</h1>";
});

// http://localhost:3000/posts/1
Route::get('/posts/{id}', function ($id) {
    return "<h1>this is a  post ${id}</h1>";
});


// http://localhost:3000/posts/22/my first posts
Route::get('/posts/{id}/{title}', function ($id, $title) {
    return "<h1>this is a  post ${id} and its title is  ${title}</h1>";
});


// ------------------ Naming Routes -----------------------------

// - In this we are giving the url a name and using it to access the url of this route
// - means we are giving the nicknames to the route url
// - php artisan route:list

// http://localhost:3000/admin/posts/example
Route::get("/admin/posts/example", array('as' => 'admin.home', function () {
    $url = route('admin.home'); // give us the url of this route
    return $url;
}));
