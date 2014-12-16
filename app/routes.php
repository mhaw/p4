<?php

use \AdamWathan\EloquentOAuth\ApplicationRejectedException;
use \AdamWathan\EloquentOAuth\InvalidAuthorizationCodeException;

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

Route::get('/', function()
	{
		if(Auth::check())
		{
			return View::make('user.index');
		}
		else
		{
			return View::make('home.index');
		}

	});


Route::post('recipes/search', 'RecipeController@postSearch');
Route::resource('recipes', 'RecipeController');

Route::post('ingredients/create', 'IngredientController@postCreate');
Route::controller('ingredients', 'IngredientController');

Route::post('tags/detachtag', 'TagController@detachtag');
Route::post('tags/addtag', 'TagController@addtag');
Route::resource('tags', 'TagController');



Route::get('/signup','UserController@getSignup' );
Route::get('/login', 'UserController@getLogin' );
Route::post('/signup', 'UserController@postSignup' );
Route::post('/login', 'UserController@postLogin' );
Route::get('/logout', 'UserController@getLogout' );
Route::get('/logout', 'UserController@getLogout' );
Route::get('/facebook/authorize', 'UserController@fbAuth' );
Route::get('/facebook/login', 'UserController@fbLogin' );
