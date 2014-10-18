<?php

class RequestAQuoteController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	
		//$hoteldata = Hotel::find($id);
		return View::make('request.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$request = new RequestAQuote;
 		
		$request->check_in = Input::get('check-in');
        $request->check_out = Input::get('check-out');
        $request->adults = Input::get('adults');
		$request->children = Input::get('childern');
		$request->anyquestion = Input::get('question');
		$request->name = Input::get('name');
        $request->email = Input::get('email');
        $request->phone = Input::get('phone');
		
        $request->save();
		
		$insertedId = $request->id;
		$data[] = RequestAQuote::find($insertedId);
		if($request->email){
			Mail::send('request.email', $data, function($message)
			{
				$message->from('deepak.leadingedge@gmail.com', 'Admin');			
				$message->to('deepak.leadingedge@gmail.com')->cc('deepak.leadingedge@gmail.com');
			});
		}
 
        return View::make('request.success', [ 'data' => $insertedId ]);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$hoteldata = Hotel::find($id);
		return View::make('request.create', [ 'data' => $hoteldata ]);
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
