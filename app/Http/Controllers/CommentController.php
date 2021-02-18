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

    public function store(){

        $post = new comment;
        $id = auth()->user()->id;

        $this->validate(request(), [

            'body' => 'required'

        ]);
        
        $post->user_id = $id;
        $post->body = request('body');
        $post->save();

        return back();
    }

}
