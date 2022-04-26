<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        return view('posts');
    }

    public function show_post($postId)
    {
        // return view('posts/show-post');

        // ------ One Way : using 'with' function ----------------
        // return view('posts.show-post')->with('postId', $postId);
        // return view('posts.show-post')
        //     ->with('postId', $postId)
        //     ->with('adminName', "Saeed Hassan");

        // ------ Second Way : using 'compact' function ----------------

        $adminName = "Saeed Hassan";
        $users = array('Anees', "Ahmed Ali", 'Yameen Ali');
        // compact('keyNameMustBeSameToTheValue')
        return view('posts/show-post', compact('postId', 'adminName', 'users'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function php_code()
    {
        return view('php-code');
    }

    // if the 'views' are inside an other folder
    public function edit_post()
    {
        // // Either this 
        // return view('posts/edit-posts');

        // // Or this ,both will work, 
        return view('posts.edit-posts');
        // 'posts' is the folder name and 'edit-posts' is the file name
    }
}
