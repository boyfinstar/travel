<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('/');
    // }

    public function index(){

        $posts = Post::with('user')->latest()->get();

        // dd($posts);
        
        return view('pages.index', compact('posts'));
        
        
        //this one is to eager load the user details along with the post
        // $posts = Post::with('user')->latest()

        //     ->filter(request()->only(['month', 'year']))

        //     ->get();
    }

    public function about(){
        
        return view('pages.about');
        
    }

    public function services(){
        
        return view('pages.services');
        
    }

    public function portfolio(){
        
        return view('pages.portfolio');
        
    }

    public function test(){
        
    }

    public function show(Post $post){

        $postWithComments = $post->load(['comment.user', 'user']);

        // dd($postWithComments);

        return view('pages.post', compact('postWithComments'));

    }

    public function profile(){

        $id = Auth()->user()->id;

        // dd($id);

        $profile = User::all()->where('user_id', $id)->get();

        dd($profile);

        return view('pages.profile', compact('profile'));

    }

}
