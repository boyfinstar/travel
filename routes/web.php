<?php

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

Route::get('/create', 'PostController@create');


Route::get('/login', 'LoginController@login')->name('login');

// Route::get(/)


// Route::get('index', function () {
//     return view('index');
// });
Auth::routes();