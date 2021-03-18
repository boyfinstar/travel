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

    public function edit(Post $post){

        $editPost = $post->load('user');

        if(Auth()->user()->id !== $post->user_id){

            return redirect('/index')->with(['denied' => 'Unauthorized Page']);
        }

        // dd($editPost);

        return view('posts.edit', compact('editPost'));

    }

    public function update(Post $post){

        $updatePost = $post->load('user');

        if(Auth()->user()->id !== $post->user_id){

            return redirect('/index')->with(['denied' => 'Unauthorized Page']);
        }

        // dd($editPost);

        $id = auth()->user()->id;

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        // $updatePost->user_id = $id;
        $updatePost->title = request('title');
        $updatePost->body = request('body');
        $updatePost->save();
        return back()->with(['success' => 'Post Updated']);

    }

    public function destroy(Post $post){

        $deletePost = Post::find($post->id);

        // dd($deletePost);

        if (Auth()->user()->id !== $post->user_id){

            return redirect('/index')->with(['denied' => 'Unauthorized Access']);
        }

        // dd($deletePost);

        $deletePost->delete();

        // dd($editPost);

        return view('pages.index')->with(['delete' => 'Post successfully deleted']);

    }
}
