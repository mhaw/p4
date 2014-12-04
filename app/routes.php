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



Route::get('facebook', function()
{
    return "<a href='fbauth'>Login with Facebook</a>";
});

Route::get('fbauth/{auth?}', function($auth = NULL)
{
    if ($auth == 'auth') {
        try {
            Hybrid_Endpoint::process();
        } catch (Exception $e) {
            return Redirect::to('fbauth');
        }
        return;
    }

    try {
        $oauth = new Hybrid_Auth(app_path(). '/config/fb_auth.php');
        $provider = $oauth->authenticate('Facebook');
        $profile = $provider->getUserProfile();
    }
    catch(Exception $e) {
        return $e->getMessage();
    }

    
    
    echo 'Welcome ' . $profile->firstName . ' '. $profile->lastName . '<br>';
    echo 'Your email: ' . $profile->email . '<br>';
    dd($profile);
});


