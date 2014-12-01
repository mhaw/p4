<?php
class UserController extends BaseController {
	/**
	*
	*/
	public function __construct() {

        $this->beforeFilter('guest',
        	array(
        		'only' => array('getLogin','getSignup')
        	));
    }

    public function getSignup() {
    	return View::make('home.signup');
    }

    public function postSignup() {
    	
        $rules = array(
            'email' => 'email|unique:users,email',
            'password' => 'min:6'
            );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()) {

        return Redirect::to('/signup')
        ->with('flash_message', 'Sign up failed; please fix the errors listed below.')
        ->withInput()
        ->withErrors($validator);
        }

        $user = new User;
        $user->email = Input::get('email');
        $user->first_name = Input::get('firstname');
        $user->last_name = Input::get('lastname');
        $user->password = Hash::make(Input::get('password'));


        # Try to add the user 
        try {
            $user->save();
        }
        # Fail
        catch (Exception $e) {
            return Redirect::to('/signup')->with('flash_message', 'Sign up failed; please try again.')->withInput();
        }

        # Log the user in
        Auth::login($user);

        return Redirect::to('/')->with('flash_message', 'Welcome to SpiceRack!');
    }

    public function getLogin() {
    	return View::make('home.login');
    }

    public function postLogin() {
    	$credentials = Input::only('email', 'password');

        if (Auth::attempt($credentials, $remember = true)) {
            return Redirect::intended('/user')->with('flash_message', 'Welcome Back!');
        }
        else {
            return Redirect::to('/')->with('flash_message', 'Log in failed; please try again.');
        }

        return Redirect::to('/');
    }

    public function getLogout() {
    	Auth::logout();
		return Redirect::to('/')->with('flash_message', 'Goodbye, come back soon!');
    }

}
