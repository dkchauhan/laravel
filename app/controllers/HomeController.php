<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default List Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		$hotels = Hotel::paginate(10);
		$hotelc = Hotel::all()->count();
		//min('price');
 
        return View::make('pages.hotels', ['hotels' => $hotels,'counts' => $hotelc]);
	}
	
	/*
	|--------------------------------------------------------------------------
	| Default List Search Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers for search request
	| Result
	|
	|
	*/ 
	public function postIndex()
    {
        /*$query_name = Input::get('name');
        $query_checkin = Input::get('check_in');
		$query_checkout = Input::get('check_out');
		$query_room = Input::get('room');
 		/*
		DB::table('users')
            ->where('name', '=', 'John')
            ->orWhere(function($query)
            {
                $query->where('votes', '>', 100)
                      ->where('title', '<>', 'Admin');
            })
            ->get();*/
		
      /* $hotels = DB::table('hotels')
    //->where('order_date', '>=', $search_order_from_date, 'and', 'order_date', '<=', $search_order_to_date, 'or')
    ->orWhere('name', '=', $query_name)
    ->orWhere('room', '=', $query_room)
    ->orderBy('order_date', 'DESC')
    ->paginate(10);*/
	
	return View::make('pages.list');

	}
	
}
