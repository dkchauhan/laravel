<?php
 
class FavoriteController extends \BaseController {
 
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
		$id = AUTH::id();
		$favorite = DB::table('favorite')
            ->join('hotels', 'favorite.favoriteid', '=', 'hotels.id')
            ->select('hotels.*',  'favorite.created_at','favorite.id as fid')
			->where('favorite.userid', $id)
            ->get();
       /*$favorite = DB::table('favorite')
                    ->where('userid', $id)
                    ->get();*/
 
        return View::make('user.myaccount.favorite', ['favorites' => $favorite]);
    }
 
    /**
     * Show the form for creating a new user.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('user.create');
    }
 
    /**
     * Store a newly created user in storage.
     *
     * @return Response
     */
    public function store()
    {
        $favorite = new Favorite;
 		$favorite->userid = Input::get('userid');
		$favorite->favoriteid = Input::get('favoriteid');
		$users = DB::table('favorite')
                    ->where('userid', Input::get('userid'))
                    ->Where('favoriteid', Input::get('favoriteid'))
                    ->get();
		if(count($users)==0){
		$favorite->save();
		
		$data = array(
		"html" => '
		<a href="#" class="btn btn-large btn-success disabled">List added successfully</a>
		'
		);
		}else{
		$data = array(
		"html" => '
		<a href="#" class="btn btn-large btn-success disabled">Allready you added </a>
		'
		);
		}		
		return Response::json($data);
		
    }
 
    /**
     * Show the form for editing the specified user.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = Favorite::find($id);
 
        return View::make('user.edit', [ 'user' => $user ]);
    }
 
    /**
     * Update the specified user in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $user = Favorite::find($id);
 
        $user->first_name = Input::get('first_name');
        $user->last_name  = Input::get('last_name');
        $user->username   = Input::get('username');
        $user->email      = Input::get('email');
        $user->password   = Hash::make(Input::get('password'));
 
        $user->save();
 
        return Redirect::to('/user');
    }
 
    /**
     * Remove the specified user from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Favorite::destroy($id);
 
        return Redirect::to('/favorite');
    }
 
}