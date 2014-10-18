<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/* Deep Travle  Routes*/
Route::resource('/user', 'UserController');
Route::resource('/hotel', 'HotelController');
Route::controller('admin', 'AdminController');
Route::controller('list', 'ListController');
Route::get('list/{id}', 'ListController@show');
//Route::resource('/list', 'HomeController');
Route::get('/', function()
{
	return View::make('pages.home');
});

/*Route::get('users', function()
{
    $users = User::all();

    return View::make('users')->with('users', $users);
});*/



Route::get('home', function()
{
	return View::make('pages.home');
});
Route::get('lists', function()
{
	return View::make('pages.list');
});
Route::get('details', function()
{
	return View::make('pages.details');
});