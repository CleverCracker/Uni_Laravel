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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about',function(){
//     return "Knock Knock";
// });

// Route::get('/contact', function () {
//     return "<h1>Contact Page</h1>";
// });

// !Simple Route

// Route::get('post/{id}', function ($id) {
//     return "THis is ID = $id";
// });


// Route::get('post/temp/example',array('as'=>"temp.name" , function () {
//     return route("temp.name");
// }));
// Route::get('post/{id}/{name}/', function ($id,$name) {
                
//     return "THis is ID = $id And Name = $name";
// });

// ! Route Controller

// Route::get('/post','PostsController@index');

// ! View Using Route

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about',function(){
//     return "Knock Knock";
// });

// Route::get('/contact', function () {
//     return view("contact");
// });

// ! Passing Data in View

Route::get('/post/{id}', function ($id) {
    return view('post')->with('id',$id);
});

Route::get('/post/{id}/{name}', function ($id,$name) {
    return view('post' ,compact('id','name'));
});

Route::get('/', function () {
    return view("index");
});