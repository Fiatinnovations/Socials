<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function getDashboard(){
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('dashboard', compact('posts'));
    }

    public function createPost(Request $request){

        $this->validate($request, [
            'body' => 'required|max:100'
        ]);

       $body  = $request['body'];

       $post = new Post();
       $post->body = $body;
       $message = 'Your posts wasn\'t sent';
       if($request->user()->posts()->save($post)){
           $message = 'Post Successfully Created';
       }
       return redirect()->route('dashboard')->with(['message'=>$message]);
    }

    public function getDelete($post_id){
        $post = Post::where('id' , $post_id)->first();
        if (Auth::user() != $post->user){
            return redirect()->route('dashboard')->with(['message'=>'You can\'t delete post.']);
        }
        else
            $post->delete();
        return redirect()->route('dashboard')->with(['message'=>'Post Successfully Deleted.']);

    }

    public function logOut () {
        Auth::logout();
        return view('welcome');
    }
}
