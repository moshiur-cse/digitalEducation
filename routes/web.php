<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('digitaleducation.index');
});
Route::get('index', function () {
    return view('digitaleducation.index');
});

Route::get('about', function () {
    return view('digitaleducation.about');
});
Route::get('contacts', function () {
    return view('digitaleducation.contacts');
});
Route::get('courses', function () {
    return view('digitaleducation.courses');
});
Route::get('price', function () {
    return view('digitaleducation.price');
});
Route::get('sidebar-right', function () {
    return view('digitaleducation.sidebar-right');
});
Route::get('videos', function () {
    return view('digitaleducation.videos');
});

Route::get('signin', function () {
    return view('digitaleducation.signin');
});

Route::post('registration', 'Registration@addUser');