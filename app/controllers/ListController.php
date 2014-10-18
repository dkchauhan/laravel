<?php

class ListController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 
	public function getIndex()
	{
	
		$sortby = Input::get('sortby');
       	$order = Input::get('order');
		if ($sortby && $order) {
		$hotels = DB::table('hotels')->orderBy($sortby , $order)->paginate(10);
		}else{
		$hotels = DB::table('hotels')->paginate(10);
		}
		$hotelc = DB::table('hotels')->count();
		//min('price');
 
        return View::make('pages.hotel.hotels', ['hotels' => $hotels,'counts' => $hotelc]);
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
       $sortby = Input::get('sortby');
       	$order = Input::get('order');
		$searchQ = Input::get('search');
		if ($sortby && $order) {
		$hotels = DB::table('hotels')->orderBy($sortby , $order)->paginate(10);
		}elseif($searchQ){
		$hotels = DB::table('hotels')->where('destinations', 'LIKE' , '%'.$searchQ.'%')->paginate(15);
		}else{
		$hotels = DB::table('hotels')->paginate(10);
		}
		$hotelc = DB::table('hotels')->count();
		//min('price');
 		
        return View::make('pages.hotel.hotels', ['hotels' => $hotels,'counts' => $hotelc]);

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getShow($id)
	{
		$hotel = Hotel::find($id);
		$review  = DB::table('hotels_review')
                    ->where('Hotel_id', $id)
                    ->get();
 		$uid = Auth::id();
        return View::make('pages.hotel.details', [ 'hotel' => $hotel,'review' => $review,'userid'=> $uid ]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
