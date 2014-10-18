@extends('layouts.default')
@section('content')
	<!-- BLUE SECTION -->	
	<div class="bluediv">
		<div class="loader">{{ HTML::image('travel/images/loading.gif') }}</div>
		
		<a href="intro2.html">{{ HTML::image('travel/images/logo-intro.png','',array('class'=> 'logointro')) }}</a>
		
		<div class="tabscontainer">
			<ul class='tabs'>
				<li class="b1" onclick='mySelectUpdate();'><a href='#tab1'><div class="anivacations">{{ HTML::image('travel/images/spacer.png') }}Vacations</div></a></li>
				<li class="b2" onclick='mySelectUpdate();'><a href='#tab2'><div class="anihotels">{{ HTML::image('travel/images/spacer.png') }}Hotels</div></a></li>
				<li class="b3" onclick='mySelectUpdate();'><a href='#tab3'><div class="aniflights">{{ HTML::image('travel/images/spacer.png') }}Flights</div></a></li>
				<li class="b4" onclick='mySelectUpdate();'><a href='#tab4'><div class="anicars">{{ HTML::image('travel/images/spacer.png') }}Cars</div></a></li>
				<li class="b5" onclick='mySelectUpdate();'><a href='#tab5'><div class="anicruises">{{ HTML::image('travel/images/spacer.png') }}Cruises</div></a></li>
			</ul>
		</div>
		
		<div class="social">
			<a href="#" >{{ HTML::image('travel/images/icon-facebook.png') }}</a>
			<a href="#" >{{ HTML::image('travel/images/icon-twitter.png') }}</a>
			<a href="#" >{{ HTML::image('travel/images/icon-gplus.png') }}</a>
			<a href="#" >{{ HTML::image('travel/images/icon-youtube.png') }}</a>
			<br/><br/>
			&copy; 2013 |<a href="#">Travel Agency</a><br/>All rights reserved.
		</div>
	</div>
	<!-- END OF BLUE SECTION -->	

	<!--WHITE SECTION -->	
	<div class="whitediv">
	
		<!--HOME OBJECTS -->	
		{{ HTML::image('travel/images/couple.png','',array('class' => 'couple')) }}
		{{ HTML::image('travel/images/girl.png','',array('class'=> 'girl')) }}
		{{ HTML::image('travel/images/girl2.png','',array('class'=> 'girl2')) }}
		{{ HTML::image('travel/images/girl-car.png','',array('class'=> 'girl-car')) }}
		{{ HTML::image('travel/images/car.png','',array('class'=> 'car')) }}
		{{ HTML::image('travel/images/girl-cruise.png','',array('class'=> 'girl-cruise')) }}
		<div class="palmbgcontainer"></div>
		{{ HTML::image('travel/images/dubai.jpg','',array('class'=> 'dubai')) }}
		{{ HTML::image('travel/images/plane.jpg','',array('class'=> 'plane')) }}
		{{ HTML::image('travel/images/road.jpg','',array('class'=> 'road')) }}
		{{ HTML::image('travel/images/cruise.jpg','',array('class'=> 'cruise')) }}

		<!--TAB 1 -->	
		<div id="tab1">
			<div class="w50percent">
				<div class="wh90percent textleft">
					<span class="opensans size13"><b>Flying from</b></span>
					<input type="text" class="form-control" placeholder="City or airport">
				</div>
			</div>

			<div class="w50percentlast">
				<div class="wh90percent textleft right">
					<span class="opensans size13"><b>To</b></span>
					<input type="text" class="form-control" placeholder="City or airport">
				</div>
			</div>
			
			<div class="clearfix"></div><br/>
			
			<div class="w50percent">
				<div class="wh90percent textleft">
					<span class="opensans size13"><b>Check in date</b></span>
					<input type="text" class="form-control mySelectCalendar2" id="datepicker" placeholder="mm/dd/yyyy"/>
				</div>
			</div>

			<div class="w50percentlast">
				<div class="wh90percent textleft right">
					<span class="opensans size13"><b>Check out date</b></span>
					<input type="text" class="form-control mySelectCalendar2" id="datepicker2" placeholder="mm/dd/yyyy"/>
				</div>
			</div>
			
			<div class="clearfix"></div>
			
			<div class="room1" >
				<div class="w50percent">
					<div class="wh90percent textleft">
						<span class="opensans size13"><b>ROOM 1</b></span><br/>
						
						<div class="addroom1 block"><a href="#room2" onclick="addroom2()" class="grey">+ Add room</a></div>
					</div>
				</div>

				<div class="w50percentlast">	
					<div class="wh90percent textleft right">
						<div class="w50percent">
							<div class="wh90percent textleft left">
								<span class="opensans size13"><b>Adult</b></span>
								<select class="form-control mySelectBoxClass">
								  <option>1</option>
								  <option selected>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							</div>
						</div>							
						<div class="w50percentlast">
							<div class="wh90percent textleft left">
							<span class="opensans size13"><b>Child</b></span>
								<select class="form-control mySelectBoxClass">
								  <option>0</option>
								  <option selected>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="room2 none">
				<div class="clearfix"></div><div class="line1"></div>
				<div class="w50percent">
					<div class="wh90percent textleft">
						<span class="opensans size13"><b>ROOM 2</b></span><br/>
						<div class="addroom2 block grey"><a href="#" onclick="addroom3()" class="grey">+ Add room</a> | <a href="#" onclick="removeroom2()" class="orange">{{ HTML::image('travel/images/delete.png','delete') }}</a></div>
					</div>
				</div>

				<div class="w50percentlast">	
					<div class="wh90percent textleft right">
						<div class="w50percent">
							<div class="wh90percent textleft left">
								<span class="opensans size13"><b>Adult</b></span>
								<select class="form-control mySelectBoxClass">
								  <option>1</option>
								  <option>2</option>
								  <option selected>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							</div>
						</div>							
						<div class="w50percentlast">
							<div class="wh90percent textleft right">
							<span class="opensans size13"><b>Child</b></span>
								<select class="form-control mySelectBoxClass">
								  <option selected>0</option>
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>		

			<div class="room3 none">
				<div class="clearfix"></div><div class="line1"></div>
				<div class="w50percent">
					<div class="wh90percent textleft">
						<span class="opensans size13"><b>ROOM 3</b></span><br/>
						<div class="addroom3 block grey"><a href="#" onclick="addroom3()" class="grey">+ Add room</a> | <a href="#" onclick="removeroom3()" class="orange">{{ HTML::image('travel/images/delete.png','delete') }}</a></div>
					</div>
				</div>

				<div class="w50percentlast">	
					<div class="wh90percent textleft right">
						<div class="w50percent">
							<div class="wh90percent textleft left">
								<span class="opensans size13"><b>Adult</b></span>
								<select class="form-control mySelectBoxClass">
								  <option selected>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							</div>
						</div>							
						<div class="w50percentlast">
							<div class="wh90percent textleft right">
							<span class="opensans size13"><b>Child</b></span>
								<select class="form-control mySelectBoxClass">
								  <option selected>0</option>
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<form action="list4.html">
				<button type="submit" class="btn-search2">Search</button>	
			</form>
		</div>
		<!-- END OF TAB1 -->
		
		<!--TAB 2 -->			
		<div id="tab2">
		 {{ Form::open(['url' => 'list','method'=>'post']) }}
			<span class="opensans size18">Choose your destination</span>
			<input type="text" class="form-control" placeholder="Greece">
			
			<br/>
			
			<div class="w50percent">
				<div class="wh90percent textleft">
					<span class="opensans size13"><b>Check in date</b></span>
					<input type="text" class="form-control mySelectCalendar2" id="datepicker7" placeholder="mm/dd/yyyy"/>
				</div>
			</div>

			<div class="w50percentlast">
				<div class="wh90percent textleft right">
					<span class="opensans size13"><b>Check out date</b></span>
					<input type="text" class="form-control mySelectCalendar2" id="datepicker8" placeholder="mm/dd/yyyy"/>
				</div>
			</div>
			
			<div class="clearfix"></div>
			
			<div class="room1" >
				<div class="w50percent">
					<div class="wh90percent textleft">
						<span class="opensans size13"><b>ROOM 1</b></span><br/>
						
						<div class="addroom1 block"><a href="#room2" onclick="addroom2()" class="grey">+ Add room</a></div>
					</div>
				</div>

				<div class="w50percentlast">	
					<div class="wh90percent textleft right">
						<div class="w50percent">
							<div class="wh90percent textleft left">
								<span class="opensans size13"><b>Adult</b></span>
								<select class="form-control mySelectBoxClass">
								  <option>1</option>
								  <option selected>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							</div>
						</div>							
						<div class="w50percentlast">
							<div class="wh90percent textleft right">
							<span class="opensans size13"><b>Child</b></span>
								<select class="form-control mySelectBoxClass">
								  <option>0</option>
								  <option selected>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="room2 none">
				<div class="clearfix"></div><div class="line1"></div>
				<div class="w50percent">
					<div class="wh90percent textleft">
						<span class="opensans size13"><b>ROOM 2</b></span><br/>
						<div class="addroom2 block grey"><a href="#" onclick="addroom3()" class="grey">+ Add room</a> | <a href="#" onclick="removeroom2()" class="orange">{{ HTML::image('travel/images/delete.png','delete') }}</a></div>
					</div>
				</div>

				<div class="w50percentlast">	
					<div class="wh90percent textleft right">
						<div class="w50percent">
							<div class="wh90percent textleft left">
								<span class="opensans size13"><b>Adult</b></span>
								<select class="form-control mySelectBoxClass">
								  <option>1</option>
								  <option>2</option>
								  <option selected>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							</div>
						</div>							
						<div class="w50percentlast">
							<div class="wh90percent textleft right">
							<span class="opensans size13"><b>Child</b></span>
								<select class="form-control mySelectBoxClass">
								  <option selected>0</option>
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>		

			<div class="room3 none">
				<div class="clearfix"></div><div class="line1"></div>
				<div class="w50percent">
					<div class="wh90percent textleft">
						<span class="opensans size13"><b>ROOM 3</b></span><br/>
						<div class="addroom3 block grey"><a href="#" onclick="addroom3()" class="grey">+ Add room</a> | <a href="#" onclick="removeroom3()" class="orange">{{ HTML::image('travel/images/delete.png','delete') }}</a></div>
					</div>
				</div>

				<div class="w50percentlast">	
					<div class="wh90percent textleft right">
						<div class="w50percent">
							<div class="wh90percent textleft left">
								<span class="opensans size13"><b>Adult</b></span>
								<select class="form-control mySelectBoxClass">
								  <option selected>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							</div>
						</div>							
						<div class="w50percentlast">
							<div class="wh90percent textleft right">
							<span class="opensans size13"><b>Child</b></span>
								<select class="form-control mySelectBoxClass">
								  <option selected>0</option>
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>	
				<button type="submit" class="btn-search2">Search</button>	
			{{ Form::close() }}
		</div>
		<!--END OF TAB 2 -->	
		
		<!--TAB 3 -->			
		<div id="tab3">
			<div class="w50percent">
				<div class="wh90percent textleft">
					<span class="opensans size13"><b>Flying from</b></span>
					<input type="text" class="form-control" placeholder="City or airport">
				</div>
			</div>

			<div class="w50percentlast">
				<div class="wh90percent textleft right">
					<span class="opensans size13"><b>To</b></span>
					<input type="text" class="form-control" placeholder="City or airport">
				</div>
			</div>
			
			
			<div class="clearfix"></div><br/>
			
			<div class="w50percent">
				<div class="wh90percent textleft">
					<span class="opensans size13"><b>Departing</b></span>
					<input type="text" class="form-control mySelectCalendar2" id="datepicker3" placeholder="mm/dd/yyyy"/>
				</div>
			</div>

			<div class="w50percentlast">
				<div class="wh90percent textleft right">
					<span class="opensans size13"><b>Returning</b></span>
					<input type="text" class="form-control mySelectCalendar2" id="datepicker4" placeholder="mm/dd/yyyy"/>
				</div>
			</div>
			
			<div class="clearfix"></div>
			
			<div class="room1" >
				<div class="w50percent">
					<div class="wh90percent textleft">
						<span class="opensans size13"><b>Adult</b></span>
						<select class="form-control mySelectBoxClass">
						  <option>1</option>
						  <option selected>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
						</select>
					</div>
				</div>

				<div class="w50percentlast">	
					<div class="wh90percent textleft right">
						<span class="opensans size13"><b>Child</b></span>
						<select class="form-control mySelectBoxClass">
						  <option>0</option>
						  <option selected>1</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
						</select>
					</div>
				</div>
			</div>	
			<form action="list4.html">
				<button type="submit" class="btn-search2">Search</button>	
			</form>
		</div>
		<!-- END OF TAB3 -->
		
		<!--TAB 4 -->	
		<div id="tab4">
			<div class="w50percent">
				<div class="wh90percent textleft">
					<span class="opensans size13"><b>Picking up</b></span>
					<input type="text" class="form-control" placeholder="Airport, address">
				</div>
			</div>

			<div class="w50percentlast">
				<div class="wh90percent textleft right">
					<span class="opensans size13"><b>Dropping off</b></span>
					<input type="text" class="form-control" placeholder="Airport, address">
				</div>
			</div>
			
			
			<div class="clearfix"></div><br/>
			
			<div class="w50percent">
				<div class="wh90percent textleft">
					<span class="opensans size13"><b>Pick up date</b></span>
					<input type="text" class="form-control mySelectCalendar2" id="datepicker5" placeholder="mm/dd/yyyy"/>
				</div>
			</div>

			<div class="w50percentlast">
				<div class="wh90percent textleft right">
					<span class="opensans size13"><b>Hour</b></span>
					<select class="form-control mySelectBoxClass">
					  <option>12:00 AM</option>
					  <option>12:30 AM</option>
					  <option>01:00 AM</option>
					  <option>01:30 AM</option>
					  <option>02:00 AM</option>
					  <option>02:30 AM</option>
					  <option>03:00 AM</option>
					  <option>03:30 AM</option>
					  <option>04:00 AM</option>
					  <option>04:30 AM</option>
					  <option>05:00 AM</option>
					  <option>05:30 AM</option>
					  <option>06:00 AM</option>
					  <option>06:30 AM</option>
					  <option>07:00 AM</option>
					  <option>07:30 AM</option>
					  <option>08:00 AM</option>
					  <option>08:30 AM</option>
					  <option>09:00 AM</option>
					  <option>09:30 AM</option>
					  <option>10:00 AM</option>
					  <option selected>10:30 AM</option>
					  <option>11:00 AM</option>
					  <option>11:30 AM</option>
					  <option>12:00 PM</option>
					  <option>12:30 PM</option>								  
					  <option>01:00 PM</option>
					  <option>01:30 PM</option>
					  <option>02:00 PM</option>
					  <option>02:30 PM</option>
					  <option>03:00 PM</option>
					  <option>03:30 PM</option>
					  <option>04:00 PM</option>
					  <option>04:30 PM</option>
					  <option>05:00 PM</option>
					  <option>05:30 PM</option>
					  <option>06:00 PM</option>
					  <option>06:30 PM</option>
					  <option>07:00 PM</option>
					  <option>07:30 PM</option>
					  <option>08:00 PM</option>
					  <option>08:30 PM</option>
					  <option>09:00 PM</option>
					  <option>09:30 PM</option>
					  <option>10:00 PM</option>
					  <option>10:30 PM</option>
					  <option>11:00 PM</option>
					  <option>11:30 PM</option>								  
					</select>
				</div>
			</div>
			
			<div class="clearfix"></div>
			
			<div class="room1" >
				<div class="w50percent">
					<div class="wh90percent textleft">
						<span class="opensans size13"><b>Drop off date</b></span>
						<input type="text" class="form-control mySelectCalendar2" id="datepicker6" placeholder="mm/dd/yyyy"/>
					</div>
				</div>

				<div class="w50percentlast">	
					<div class="wh90percent textleft right">
						<span class="opensans size13"><b>Hour</b></span>
						<select class="form-control mySelectBoxClass">
						  <option>12:00 AM</option>
						  <option>12:30 AM</option>
						  <option>01:00 AM</option>
						  <option>01:30 AM</option>
						  <option>02:00 AM</option>
						  <option>02:30 AM</option>
						  <option>03:00 AM</option>
						  <option>03:30 AM</option>
						  <option>04:00 AM</option>
						  <option>04:30 AM</option>
						  <option>05:00 AM</option>
						  <option>05:30 AM</option>
						  <option>06:00 AM</option>
						  <option>06:30 AM</option>
						  <option>07:00 AM</option>
						  <option>07:30 AM</option>
						  <option>08:00 AM</option>
						  <option>08:30 AM</option>
						  <option>09:00 AM</option>
						  <option>09:30 AM</option>
						  <option>10:00 AM</option>
						  <option selected>10:30 AM</option>
						  <option>11:00 AM</option>
						  <option>11:30 AM</option>
						  <option>12:00 PM</option>
						  <option>12:30 PM</option>								  
						  <option>01:00 PM</option>
						  <option>01:30 PM</option>
						  <option>02:00 PM</option>
						  <option>02:30 PM</option>
						  <option>03:00 PM</option>
						  <option>03:30 PM</option>
						  <option>04:00 PM</option>
						  <option>04:30 PM</option>
						  <option>05:00 PM</option>
						  <option>05:30 PM</option>
						  <option>06:00 PM</option>
						  <option>06:30 PM</option>
						  <option>07:00 PM</option>
						  <option>07:30 PM</option>
						  <option>08:00 PM</option>
						  <option>08:30 PM</option>
						  <option>09:00 PM</option>
						  <option>09:30 PM</option>
						  <option>10:00 PM</option>
						  <option>10:30 PM</option>
						  <option>11:00 PM</option>
						  <option>11:30 PM</option>		
					    </select>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<form action="list4.html">
				<button type="submit" class="btn-search2">Search</button>	
			</form>			
		</div>
		<!-- END OF TAB4 -->
		
		<!--TAB 5 -->	
		<div id="tab5">
			<div class="fullwidth">
				<span class="opensans size13"><b>Going to</b></span>
				<select class="form-control mySelectBoxClass">
				  <option selected>Show all</option>
				  <optgroup label="Most Popular">
					  <option>Caribbean</option>
					  <option>Bahamas</option>
					  <option>Mexico</option>
					  <option>Alaska</option>
					  <option>Europe</option>
					  <option>Bermuda</option>
					  <option>Hawaii</option>
				  </optgroup>
				  <optgroup label="Other Destinations">
					  <option>Africa</option>
					  <option>Arctic/Antartctic</option>
					  <option>Asia</option>
					  <option>Australia/New Zealand</option>
					  <option>Central America</option>
					  <option>Cruise to Nowhere</option>
					  <option>Galapagos</option>
					  <option>Greenland/Iceland</option>
					  <option>Middle East</option>
					  <option>Pacific Coastal</option>
					  <option>Panama Canal</option>
					  <option>South Africa</option>
					  <option>South Pacific</option>
					  <option>Tahiti</option>
					  <option>Transatlantic</option>
					  <option>World Cruises</option>
				  </optgroup>
				</select>

				<br/>
				
				<span class="opensans size13"><b>Departure</b></span>
				<select class="form-control mySelectBoxClass">
				  <option selected>Show all</option>
				  <option>October 2013</option>
				  <option>November 2013</option>
				  <option>December 2013</option>
				  <option>January 2014</option>
				  <option>February 2014</option>
				  <option>March 2014</option>
				  <option>April 2014</option>
				  <option>May 2014</option>
				  <option>June 2014</option>
				  <option>July 2014</option>
				  <option>August 2014</option>
				  <option>September 2014</option>
				  <option>October 2014</option>
				  <option>November 2014</option>
				  <option>December 2014</option>
				</select>
				<form action="list4.html">
					<button type="submit" class="btn-search2">Search</button>	
				</form>
			</div>		
		</div>
		<!-- END OF TAB5 -->
		
		
		
		
	</div>
	<!-- END OF WHITE SECTION -->	
	
	
	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{ HTML::script('travel/dist/js/bootstrap.min.js') }}
	
    <!-- Javascript -->
	{{ HTML::script('travel/assets/js/js-intro.js') }}
	
	<!-- Preload images -->
    {{ HTML::script('travel/assets/js/jquery.preload.js') }}	
	
    <!-- Easing -->	
    {{ HTML::script('travel/assets/js/jquery.easing.js') }}
	
    <!-- Nicescroll  -->	
	{{ HTML::script('travel/assets/js/jquery.nicescroll.min.js') }}	
	
    <!-- Picker UI-->		
	{{ HTML::script('travel/assets/js/jquery-ui.js') }}	
	
    <!-- Custom Select -->
	{{ HTML::script('travel/assets/js/jquery.customSelect.js') }}
	
    <!-- Functions -->
    {{ HTML::script('travel/assets/js/functions.js') }}
	
    <!-- CarouFredSel -->
    {{ HTML::script('travel/assets/js/jquery.carouFredSel-6.2.1-packed.js') }}
    {{ HTML::script('travel/assets/js/helper-plugins/jquery.touchSwipe.min.js') }}
	{{ HTML::script('travel/assets/js/helper-plugins/jquery.mousewheel.min.js') }}
	{{ HTML::script('travel/assets/js/helper-plugins/jquery.transit.min.js') }}
	{{ HTML::script('travel/assets/js/helper-plugins/jquery.ba-throttle-debounce.min.js') }}
@stop