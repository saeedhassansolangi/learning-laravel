<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// php artisan route:list
class PostControllerResources extends Controller
{

    // METHOD: GET, 
    // ENDPOINT: http://localhost:8000/posts
    public function index()
    {
        return "<div>
            <p>This is the Post Get Route to view the all Post</p>
            <ul>
                <li><a href='/posts/'>Visit all post</a></li>
                <li><a href='/posts/create'>Show Add Post Form</a></li>
                <li><a href='/posts/1'>Visit post 1</a></li>
                <li><a href='/posts/1/edit'>Edit post 1</a></li>
            </ul>
        </div>";
    }


    // METHOD: GET
    // ENDPOINT: http://localhost:8000/posts/create
    public function create()
    {
        return "<div>

            <h1>Create New Post here</h1>
            <p><a href='/posts/'>View all posts </a></p>
            <form >

                <div>
                    <label>Post title</label>
                     <input type='text'  placeholder='write post title here'/>
                </div>

                  <div>
                    <label>Post Description</label>
                     <input type='text'  placeholder='write post description here'/>
                </div>

                <button>Submit</button>

            
            </form>
        </div>";
    }

    // METHOD: POST
    // ENDPOINT: http://localhost:8000/posts
    public function store(Request $request)
    {

        return 'Post Request for posts, in order to add the post into the database';
    }


    // METHOD: GET
    // ENDPOINT : http://localhost:8000/posts/123
    public function show($postId)
    {
        return "you request post ${postId}";
    }


    // METHOD : GET
    // ENDPOINT : http://localhost:8000/posts/123/edit
    public function edit($postId)
    {
        return "you request to edit post id of ${postId} ";
    }


    // METHOD: PUT OR PATCH
    // ENDPOINT : http://localhost:8000/posts/123
    public function update(Request $request, $id)
    {
        return 'you want to update the post using patch or put method';
    }

    // METHOD : DELETE
    // ENDPOINT : http://localhost:8000/posts/123
    public function destroy($id)
    {
        return 'you want to delete the post';
    }
}
