<?php

class AdminController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Custom Admin Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'AdminController@getIndex');
	|
	*/

	public function getIndex()
    {
		if(Auth::check()){
       		if(Auth::id()==1){
			return Redirect::to('user');
			}else{
			return Redirect::to('favorite');
			}
		 	//return View::make('pages.login');
		}else{
		return View::make('pages.login');
    	}
	}
 
    public function postIndex()
    {
        $username = Input::get('username');
        $password = Input::get('password');
 
        if (Auth::attempt(['username' => $username, 'password' => $password,'id' => 1]))
        {
            return Redirect::intended('hotel');
        }elseif(Auth::attempt(['username' => $username, 'password' => $password])){
		    return Redirect::intended('favorite');	
		}
 
        return Redirect::back()
            ->withInput()
            ->withErrors('That username/password combo does not exist.');
    }
 
 	public function getDashboard() {
     
	  	return View::make('pages.dashboard');
	}
	
    public function getLogin()
    {
        if(Auth::check())
		{
		   return Redirect::to('user');
		}else{
		   return Redirect::to('admin');
    	}
	}
 
    public function getLogout()
    {
        Auth::logout();
		
        return Redirect::to('admin');
    }

}
