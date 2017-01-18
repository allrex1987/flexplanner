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


Route::get('/', function () {
    return view('welcome');
});

//Basic routing for built in Auth Laravel
Auth::routes();

//Homecontroller
Route::get('/home', 'HomeController@index');

//Profile
Route::get('/profile', 'UserController@show')->middleware('auth');;
Route::get('/profile/edit', 'UserController@edit')->middleware('auth');
Route::post('/profile/update', 'UserController@ajaxUpdate')->middleware('auth');


//Activate user
Route::get('user/activation/{token}', 'Auth\LoginController@activateUser')->name('user.activate');


