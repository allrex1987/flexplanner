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

//Where should this method be?????
Route::get('/profile/teams', 'UserController@ajaxGetTeams')->middleware('auth');

//Teams
Route::get('/teams', 'TeamController@index')->middleware('auth');
Route::get('/team/{id}', 'TeamController@ajaxShow')->middleware('auth');
Route::post('/team/create', 'TeamController@ajaxCreate')->middleware('auth');

//Activate user
Route::get('user/activation/{token}', 'Auth\LoginController@activateUser')->name('user.activate');

//Search
Route::get('/search/userbyemail', 'UserController@jsonUsersByEmail')->middleware('auth');

//Ignore, just for html development profile
Route::get('/profile-test', function()
{
    return View::make('profile/test', array('name' => 'Taylor'));
});
