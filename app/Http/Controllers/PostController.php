<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
use App\User;
use PhpParser\Node\Expr\PostInc;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $post = new Post;


        // this is for the validation
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        // we dey die n dump here
        // dd(request($post));

            $id = auth()->user()->id;

            // dd($id);

        // this and the one not uncomment below her the same.

        $post->user_id = $id;
        $post->title = request('title');
        $post->body = request('body');
        $post->save();
        return redirect('/');

        // Post::create([
        //         'user_id' => $id,
        //         'title' => request('title'),
        //         'body' => request('body')
        //     ]);

        // auth()->user()->publish(

        //     new Post(request(['title', 'body']))
        // );

        // return redirect('/');
    }
}
