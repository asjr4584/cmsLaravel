<?php

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

//Route::view('/', 'first');

Route::redirect('welcome',  "come",301);

Route::get('/', function () {
    return view('first');
    //return view('welcome');
	
});

Route::get('/come', function () {
    return view('first');
    //return view('welcome');
	
});

Route::get('/about', function () {
    //return view('welcome');

    return "About page";
	
});

Route::get('/post/{id}', function ($id) {
    //return view('welcome');

    return "This post is page " . $id;
	
});


