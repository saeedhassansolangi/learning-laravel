<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return 'hello';
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    //-- my Custom Functions ----------------------------
    public function myName()
    {
        return "<p>Hello, Iam Saeed Hassan</p>";
    }

    public function greet($username)
    {
        return "<h2>Hi, ${username}</h2>";
    }

    public function getPostComments($postId)
    {
        return "<p>Here is your ${postId}th post's  comments</p>";
    }

    public function getPostUsername($postId, $username)
    {

        return "<p> post " . $postId . "th username is " . $username . "</p>";
    }

    public function getSpecificComment($postId, $commentId)
    {

        return "<p> here is your " . $postId . "th posts " . $commentId . "th comment</p>";
    }
}
