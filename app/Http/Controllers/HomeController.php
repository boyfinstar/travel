<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
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
        
        return view('pages.index');
        
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
        
        return view('pages.test');
        
    }

}
