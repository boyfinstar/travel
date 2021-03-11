<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'HomeController@index')->name('home');
Route::get('/index', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::get('/about', 'HomeController@about');
Route::get('/services', 'HomeController@services');
Route::get('/portfolio', 'HomeController@portfolio');
Route::get('/test', 'HomeController@test');
Route::get('/posts/{post}', 'HomeController@show');

Route::get('/profile', 'HomeController@profile');
Route::put('/profile', 'HomeController@store');

Route::get('/create', 'PostController@create');
Route::post('store', 'PostController@store');

Route::post('/post/{post}/comment', 'CommentController@store');

Route::get('/test', 'HomeController@test');
Route::post('/test', 'HomeController@upload');
// Route::get('/login', 'LoginController@login')->name('login');
// Route::post('/store', 'LoginController@login');

// Route::get(/)


// Route::get('index', function () {
//     return view('index');
// });
Auth::routes();