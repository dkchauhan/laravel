<?php
 
class UserController extends \BaseController {
 
    public function __construct()
    {
        $this->beforeFilter('auth');
    }
 
    /**
     * Display a listing of the user.
     *
     * @return Response
     */
    public function index()
    {
       $users = User::all();
 
        return View::make('user.index', ['users' => $users]);
    }
 
    /**
     * Show the form for creating a new user.
     *
     * @return Response
     */
    public function create()
    {
		if(AUTH::id()==1){
        return View::make('user.create');
		}else{
		return Redirect::to('/');
		}
    }
 
    /**
     * Store a newly created user in storage.
     *
     * @return Response
     */
    public function store()
    {
        $user = new User;
 		//Image
		$file = Input::file('image'); // your file upload input field in the form should be named 'file'

		$destinationPath = 'uploads/'.str_random(8);
		$filename = $file->getClientOriginalName();
		//$extension =$file->getClientOriginalExtension(); //if you need extension of the file
		$uploadSuccess = Input::file('image')->move($destinationPath, $filename);
		//End
		$user->image = $uploadSuccess;
        $user->first_name = Input::get('first_name');
        $user->last_name  = Input::get('last_name');
        $user->username   = Input::get('username');
        $user->email      = Input::get('email');
        $user->password   = Hash::make(Input::get('password'));
 
        $user->save();
 
        return Redirect::to('/user');
    }
 
    /**
     * Show the form for editing the specified user.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
		if(AUTH::id()==1 || AUTH::id()==$id){
        	$user = User::find($id);
 			if(AUTH::id()==1){
        	return View::make('user.edit', [ 'user' => $user ]);
			}else{
			return View::make('user.myaccount.edit', [ 'user' => $user ]);
			}
		}
    }
 
    /**
     * Update the specified user in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $user = User::find($id);
 
        $user->first_name = Input::get('first_name');
        $user->last_name  = Input::get('last_name');
        $user->username   = Input::get('username');
        $user->email      = Input::get('email');
        $user->password   = Hash::make(Input::get('password'));
 
        $user->save();
 
       if(AUTH::id()==1){
        return Redirect::to('/user');
		}else{
		return Redirect::back()
            ->withInput()
            ->withErrors('Profile updated successfully .. ');
		}
    }
 
    /**
     * Remove the specified user from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        User::destroy($id);
 
        return Redirect::to('/user');
    }
 
}