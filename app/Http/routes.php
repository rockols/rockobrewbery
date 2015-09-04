<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index.home');
});

Route::get('home', function () {
    return view('index.home');
});

Route::get('about', function () {
    return view('index.about');
});


Route::get('gallery', function () {
    return view('index.gallery');
});

Route::get('blog', function () {
    return view('index.blog');
});

Route::get('contact', function () {
    return view('index.contact');
});

Route::get('admin', function () {
    return view('admin.login');
});

Route::controllers([
	'user' 		=> 'UserController',
	'ourbeers'	=> 'OurBeersController',


	'auth'		=> 'Auth\AuthController',
	'password'	=> 'Auth\PasswordController',
]);