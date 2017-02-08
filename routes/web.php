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

Route::post('registration', 'RegistrationController@addUser');
Route::post('signin', 'RegistrationController@logIn');
Route::get('logout', 'RegistrationController@logOut');

Route::get('profile', function () {

    return view('digitaleducation.profile');
});

Route::post('profile', 'RegistrationController@profile');

Route::get('usersignup', function () {

    return view('digitaleducation.usersignup');
});
Route::post('usersignup', 'RegistrationController@addUser');

Route::get('signuporganization', function () {

    return view('digitaleducation.signuporganization');
});
Route::post('signuporganization', 'RegistrationController@addOrganization');

// Examinatoin 
/*Route::get('examination', function () {

    return view('digitaleducation.examination');
});*/

Route::get('examination', 'QuestionController@GetAllSet');

Route::post('questionset', 'QuestionController@addQuestionSet');
Route::get('addQuestion_{id}', 'QuestionController@AddQuestion');

Route::post('test', 'QuestionController@test');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
