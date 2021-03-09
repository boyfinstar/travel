<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
use App\User;
use App\Comment;

class CommentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Post $post){

        $comment = new Comment;
        
        $post_id = $post->id;

        // dd($post_id);

        $user_id = auth()->user()->id;


        $this->validate(request(), [

            'body' => 'required'

        ]);

        $comment->post_id = $post_id;
        $comment->user_id = $user_id;
        $comment->body = request('body');
        $comment->save();

        return back();
    }

}
