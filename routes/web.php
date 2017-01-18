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

//Show profile
Route::get('/profile', 'UserController@show')->middleware('auth');;

//ActivationRoute
//TODO - It is best to put it under the Route::auth() ?
//TODO - Change URL?
Route::get('user/activation/{token}', 'Auth\LoginController@activateUser')->name('user.activate');

/* Testning testning sending emails
Route::get('send_test_email', function(){
	Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
	{
		$message->subject('Mailgun and Laravel are awesome!');
		$message->from('alexandra.johansson122@gmail.com', 'Website Name');
		$message->to('alexandra.johansson122@gmail.com');
	});
});
*/
