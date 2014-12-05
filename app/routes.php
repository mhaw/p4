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

Route::resource('recipes', 'RecipeController');

Route::post('ingredients/create', 'IngredientController@postCreate');
Route::controller('ingredients', 'IngredientController');

Route::post('tags/addtag', 'TagController@addtag');
Route::resource('tags', 'TagController');



Route::get('/signup','UserController@getSignup' );
Route::get('/login', 'UserController@getLogin' );
Route::post('/signup', 'UserController@postSignup' );
Route::post('/login', 'UserController@postLogin' );
Route::get('/logout', 'UserController@getLogout' );

Route::get('facebook/authorize', function() {
    return OAuth::authorize('facebook');
});

Route::get('facebook/login', function() {
    try {
        OAuth::login('facebook', function($user, $details) {
            $user->email = $details->email;
            $user->first_name = $details->firstName;
            $user->last_name = $details->lastName;
            $user->save();
    });

    } catch (ApplicationRejectedException $e) {
        // User rejected application
    } catch (InvalidAuthorizationCodeException $e) {
        // Authorization was attempted with invalid
        // code,likely forgery attempt
    }

    // Current user is now available via Auth facade
    $user = Auth::user();

    return Redirect::to('/../')->with('flash_message', 'Welcome to SpiceRack!');
});



