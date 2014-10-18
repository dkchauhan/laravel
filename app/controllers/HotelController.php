<?php

class HotelController extends \BaseController {

	
	 public function __construct()
    {
        $this->beforeFilter('auth');
		
    }
	
	
	/**
	* Provate function for redirect
	* @return Response
	*/
	public function check_permissions()
	{
	  		
		   //echo 'hello';die;
		   return Redirect::to('/');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$hotels = Hotel::all() User::paginate(50);
		if( Auth::id() != 1 ){
		return Redirect::to('/');
		}
		$hotels = Hotel::paginate(10);
 
        return View::make('hotels.index', ['hotels' => $hotels]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if( Auth::id() != 1 ){
		return Redirect::to('/');
		}
		return View::make('hotels.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if( Auth::id() != 1 ){
		return Redirect::to('/');
		}
		$hotel = new Hotel;
 
        $hotel->first_name = Input::get('first_name');
        $hotel->last_name  = Input::get('last_name');
        $hotel->hotelname   = Input::get('hotelname');
        $hotel->email      = Input::get('email');
        $hotel->password   = Hash::make(Input::get('password'));
 
        $hotel->save();
 
        return Redirect::to('/hotel');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		if( Auth::id() != 1 ){
		return Redirect::to('/');
		}
		$hotel = Hotel::find($id);
 
        return View::make('hotels.edit', [ 'hotel' => $hotel ]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		if( Auth::id() != 1 ){
		return Redirect::to('/');
		}
		$hotel = Hotel::find($id);
 
        $hotel->type = Input::get('type');
        $hotel->shortdesc  = Input::get('shortdesc');
        $hotel->status   = Input::get('status');
        $hotel->destinations  = Input::get('destinations');
        $hotel->minpps   = Input::get('minpps');
		 $hotel->typedesc   = Input::get('typedesc');
        $hotel->rating  = Input::get('rating');
        $hotel->available   = Input::get('available');
		 $hotel->responsehours   = Input::get('responsehours');
        $hotel->tradingcurrency  = Input::get('tradingcurrency');
        $hotel->longitude   = Input::get('longitude');
		$hotel->latitude   = Input::get('latitude');
		 $hotel->smileyRating   = Input::get('smileyRating');
        $hotel->destinations  = Input::get('destinations');
 
        $hotel->save();
 
        return Redirect::to('/hotel');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if( Auth::id() != 1 ){
		return Redirect::to('/');
		}
		Hotel::destroy($id);
 
        return Redirect::to('/hotel');
	}


}
