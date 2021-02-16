<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
use App\User;

class CommentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(){

        $post = new post;

        $this->validate(request(), [

            'body' => 'required';

        ])

        return back();
    }
}
