<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function createPost(Request $request){

        $this->validate($request, [
            'body' => 'required|max:100'
        ]);

       $body  = $request['body'];

       $post = new Post();
       $post->body = $body;
       $message = 'Your posts wasnt sent';
       if($request->user()->posts()->save($post)){
           $message = 'Post Successfully Created';
       }
       return view('dashboard')->with(['message'=>$message]);
    }
}
