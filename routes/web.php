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

add this path to environment varialble to get access to: php artisan:
C:\Users\Allan\AppData\Roaming\Composer\vendor\bin;C:\wamp64\bin\php\php7.3.0

php artisan serve
http://127.0.0.1:8000/

php artisan serve --host=cms.test --port=80

php artisan serve --host=cms.test --port=8000

php artisan serve --host=cms.test --port=8080

Allan@Windows10-Allan MINGW64 /
$ cd c:/wamp64/www/cms


creating a controller (for classes)
Allan@Windows10-Allan MINGW64 /c/wamp64/www/cms (develop)
$ php artisan make:controller Tutorial
Controller created successfully.


*/

//C:\wamp64\www\cms\routes

//Route::view('/', 'first');

Route::resource('posts', 'PostsController');

Route::get('/post/{id}', 'PostsController@index');

/*Route::get('/post/{id}', function ($id) {
    //return view('welcome');

    return "This post is page " . $id;
    
});*/


Route::get("/tutorial/{id}", 'Tutorial@show');

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

