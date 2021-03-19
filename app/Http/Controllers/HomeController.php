<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Symfony\Component\Routing\Router;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show', 'services', 'portfolio', 'about']);
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


    public function boot()
    {
        Paginator::useBootstrap();
    }

    public function index(){

        $posts = Post::with('user')->latest()->paginate(5);

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

        return view('pages.test');
        
    }

    public function show(Post $post){

        $postWithComments = $post->load(['comment.user', 'user']);

        // dd($postWithComments);

        return view('pages.post', compact('postWithComments'));

    }

    public function profile(){

        // $id = Auth()->user()->id;
        // dd($id);
        // $profile = User::where('id', $id)->first();
        // dd($profile);

        return view('pages.profile');

    }

    
    public function upload(Request $request){

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time(). '.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);
   
        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);
        
    }

    public function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : Str::random(25);

        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

        return $file;
    }

    public function store(Request $request){

        // $store = new User;
        // dd($request->all());
        $request->validate([

            'name' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'location' => 'required',
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // dd($request->all());

        // Get current user
        $user = User::findOrFail(auth()->user()->id);

        $user->name = request('name');
        $user->lastname = request('lastname');
        $user->phone = request('phone');
        $user->email = request('email');
        $user->location = request('location');
        // $user->profile_image = request('profile_image');

        // dd($user->profile_image);

        // Check if a profile image has been uploaded
        if ($request->has('profile_image')) {
            // Get image file
            $image = $request->file('profile_image');
            // Make a image name based on user name and current timestamp
            $name = Str::slug(request('name')).'_'.time();
            // Define folder path
            $folder = '/images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $user->profile_image = $filePath;
        }

        // Persist user record to database
        $user->save();

        // Return user back and show a flash message
        return back()->with(['success' => 'Profile updated successfully.']);

        
    }

}
