@extends('layouts.details')
@section('content')
<?php $imgs = explode(',',$hotel['Gallery']); ?>
<div class="container breadcrub">
  <div> <a class="homebtn left" href="#"></a>
    <div class="left">
      <ul class="bcrumbs">
        <li>/</li>
        <li><a href="../../list">Hotels</a></li>
        <li>/</li>
        <li><a href="#">{{ $hotel['name'] }}</a></li>
        
      </ul>
    </div>
    <a class="backbtn right" href="#"></a> </div>
  <div class="clearfix"></div>
  <div class="brlines"></div>
</div>
<!-- CONTENT -->
<div class="container">
  <div class="container pagecontainer offset-0">
    <!-- SLIDER -->
    <div class="col-md-8 details-slider">
      <div id="c-carousel">
        <div id="wrapper">
          <div id="inner">
            <div id="caroufredsel_wrapper2">
              <div id="carousel"> 
			  @foreach ($imgs as $img)
			  <img src="/{{ $img }}"> 
			  @endforeach
			  </div>
            </div>
            <div id="pager-wrapper">
              <div id="pager"> 
			   @foreach ($imgs as $img)
			   <img src="/{{ $img }}" width="120" height="68" alt=""> 
			   @endforeach
			   </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <button id="prev_btn2" class="prev2">{{ HTML::image('travel/images/spacer.png') }}</button>
          <button id="next_btn2" class="next2">{{ HTML::image('travel/images/spacer.png') }}</button>
        </div>
      </div>
      <!-- /c-carousel -->
    </div>
    <!-- END OF SLIDER -->
    <!-- RIGHT INFO -->
    <div class="col-md-4 detailsright offset-0">
      <div class="padding20">
        <h4 class="lh1">{{ $hotel['name'] }}</h4>
        {{ HTML::image('travel/images/smallrating-5.png') }} </div>
      <div class="line3"></div>
      <div class="hpadding20">
        <h2 class="opensans slim green2">Wonderful!</h2>
      </div>
      <div class="line3 margtop20"></div>
      <div class="col-md-6 bordertype1 padding20"> <span class="opensans size30 bold grey2">${{ $hotel['minpps'] }}</span><br/>
        Price<br/>
       </div>
      <div class="col-md-6 bordertype2 padding20"> <span class="opensans size30 bold grey2">{{ $hotel['rating'] }}</span><br/>
        guest ratings </div>
      <div class="col-md-6 bordertype3"> {{ HTML::image('travel/images/user-rating-4.png') }}<br/>
        {{ $hotel['rating'] }} reviews </div>
      <!--<div class="col-md-6 bordertype3"> <a href="#" class="grey">+Add review</a> </div>-->
      <div class="clearfix"></div>
      <br/>
      <div class="hpadding20"> <form class="form ajax" action="http://sastay.co.za/laravel/public/favorite" data-replace="#submit-status" method="post"> 
	  {{ Form::hidden('userid', $userid ) }}
	  {{ Form::hidden('favoriteid', $hotel['id'] ) }}
	  <!--<a href="#" class="add2fav margtop5">Add to favourite</a>-->
	  <input type="submit" value="ADD TO FAVORITE" class="add2fav margtop5">
	  </form>
	  @if ($userid=='')
	  <script type="text/javascript" >
	  $(document).ready(function(){
	  $('.add2fav').click(function(){
	  $('.btn-success').show();
	  });
	  });
	  </script>
	  <a href="http://sastay.co.za/laravel/public/admin" class="btn btn-large btn-success" style="display:none">Please login</a>
	  @endif
	  <p id="submit-status"></p>
	   <a href="#" class="booknow margtop20 btnmarg">Book now</a> </div>
    </div>
    <!-- END OF RIGHT INFO -->
  </div>
  <!-- END OF container-->
  <div class="container mt25 offset-0">
    <div class="col-md-8 pagecontainer2 offset-0">
      <div class="cstyle10"></div>
      <ul class="nav nav-tabs" id="myTab">
        <li onClick="mySelectUpdate()" class="active"><a data-toggle="tab" href="#summary"><span class="summary"></span><span class="hidetext">Summary</span>&nbsp;</a></li>
        <!--<li onClick="mySelectUpdate()" class="active"><a data-toggle="tab" href="#roomrates"><span class="rates"></span><span class="hidetext">Room rates</span>&nbsp;</a></li>-->
        <li onClick="mySelectUpdate()" class=""><a data-toggle="tab" href="#preferences"><span class="preferences"></span><span class="hidetext">Preferences</span>&nbsp;</a></li>
        <li onClick="loadScript()" class=""><a data-toggle="tab" href="#maps"><span class="maps"></span><span class="hidetext">Maps</span>&nbsp;</a></li>
        <li onClick="mySelectUpdate(); trigerJslider(); trigerJslider2(); trigerJslider3(); trigerJslider4(); trigerJslider5(); trigerJslider6();" class=""><a data-toggle="tab" href="#reviews"><span class="reviews"></span><span class="hidetext">Reviews</span>&nbsp;</a></li>
        <!--<li onClick="mySelectUpdate()" class=""><a data-toggle="tab" href="#thingstodo"><span class="thingstodo"></span><span class="hidetext">Things to do</span>&nbsp;</a></li>-->
      </ul>
      <div class="tab-content4" >
        <!-- TAB 1 -->
        <div id="summary" class="tab-pane active">
          <p class="hpadding20">{{ $hotel['shortdesc'] }} </p>
          
          <!-- Collapse 1 -->
                   <!-- End of collapse 1 -->
          <div class="line4"></div>
          <!-- Collapse 2 -->
          <button type="button" class="collapsebtn2" data-toggle="collapse" data-target="#collapse2"> Type <span class="collapsearrow"></span> </button>
          <div id="collapse2" class="collapse in">
            <div class="hpadding20"> {{ $hotel['typedesc'] }} </div>
            <div class="clearfix"></div>
          </div>
          <!-- End of collapse 2 -->
          
          <!-- End of collapse 6 -->
        </div>
        <!-- TAB 2 -->
        
        <!-- TAB 3 -->
        <div id="preferences" class="tab-pane fade">
          <p class="hpadding20"> The hotel offers a snack bar/deli. A bar/lounge is on site where guests can unwind with a drink. Guests can enjoy a complimentary breakfast. An Internet point is located on site and high-speed wireless Internet access is complimentary. </p>
          <!--<div class="line4"></div>
          <!-- Collapse 7 -->
          <!-- <button type="button" class="collapsebtn2" data-toggle="collapse" data-target="#collapse7"> Hotel facilities <span class="collapsearrow"></span> </button>
          <div id="collapse7" class="collapse in">
            <div class="hpadding20">
              <div class="col-md-4 offset-0">
			    <ul class="hotelpreferences2 left">
                  <li class="icohp-internet"></li>
                  <li class="icohp-air"></li>
                  <li class="icohp-pool"></li>
                  <li class="icohp-childcare"></li>
                  <li class="icohp-fitness"></li>
                  <li class="icohp-breakfast"></li>
                  <li class="icohp-parking"></li>
                  <li class="icohp-pets"></li>
                  <li class="icohp-spa"></li>
                  <li class="icohp-hairdryer"></li>
                </ul>
                <ul class="hpref-text left">
                  <li>High-speed Internet</li>
                  <li>Air conditioning</li>
                  <li>Swimming pool</li>
                  <li>Childcare</li>
                  <li>Fitness equipment</li>
                  <li>Free breakfast</li>
                  <li>Free parking</li>
                  <li>Pets allowed</li>
                  <li>Spa services on site</li>
                  <li>Hair dryer</li>
                </ul>
              </div>
              <div class="col-md-4 offset-0">
                <ul class="hotelpreferences2 left">
                  <li class="icohp-garden"></li>
                  <li class="icohp-grill"></li>
                  <li class="icohp-kitchen"></li>
                  <li class="icohp-bar"></li>
                  <li class="icohp-living"></li>
                  <li class="icohp-tv"></li>
                  <li class="icohp-fridge"></li>
                  <li class="icohp-microwave"></li>
                  <li class="icohp-washing"></li>
                  <li class="icohp-roomservice"></li>
                </ul>
                <ul class="hpref-text left">
                  <li>Courtyard garden</li>
                  <li>Grill / Barbecue</li>
                  <li>Kitchen</li>
                  <li>Bar</li>
                  <li>Living</li>
                  <li>TV</li>
                  <li>Fridge</li>
                  <li>Microwave</li>
                  <li>Washing maschine</li>
                  <li>Room service</li>
                </ul>
              </div>
              <div class="col-md-4 offset-0">
                <ul class="hotelpreferences2 left">
                  <li class="icohp-safe"></li>
                  <li class="icohp-playground"></li>
                  <li class="icohp-conferenceroom"></li>
                </ul>
                <ul class="hpref-text left">
                  <li>Reception Safe</li>
                  <li>Playground</li>
                  <li>Conference room</li>
                </ul>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <!-- End of collapse 7 -->
          <div class="line4"></div>
          <!-- Collapse 8 -->
          <button type="button" class="collapsebtn2" data-toggle="collapse" data-target="#collapse8"> Room facilities <span class="collapsearrow"></span> </button>
          <div id="collapse8" class="collapse in">
            <div class="hpadding20">
			<?php $fdata = explode(',',$hotel['facilities']);  ?>
              <div class="col-md-4">
                <ul class="checklist">
				 <?php if(count($fdata)>4) { $c4 = 4; }else{ $c4 = count($fdata); } for($i=0;$i<$c4;$i++){  ?>
                  <li><?=$fdata[$i]?></li>
				  <?php } ?>
               </ul>
              </div>
			  <?php if(count($fdata)>4) { ?>
              <div class="col-md-4">
                <ul class="checklist">
                 <?php if(count($fdata)>8) { $c8 = 8; }else{ $c8 = count($fdata); } for($i=4;$i<$c8;$i++){ ?>
                  <li><?=$fdata[$i]?></li>
				  <?php } ?>
                </ul>
              </div>
			  <?php } 
			  if(count($fdata)>8){
			  ?>
              <div class="col-md-4">
                <ul class="checklist">
                  <?php for($i=8;$i<count($fdata);$i++){ ?>
                  <li><?=$fdata[$i]?></li>
				  <?php } ?>
                </ul>
              </div>
			  <?php } ?>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- End of collapse 8 -->
        </div>
        <!-- TAB 4 -->
        <div id="maps" class="tab-pane fade">
          <div class="hpadding20">
            <div id="map-canvas"></div>
          </div>
        </div>
        <!-- TAB 5 -->
        <div id="reviews" class="tab-pane fade ">
						<div class="line2"></div>
						<?php foreach($review as $rw){?>
						<div class="hpadding20">							
							<div class="col-md-4 offset-0 center">
								<div class="padding20">
									<div class="bordertype5">
										<div class="circlewrap">
											{{ HTML::image('travel/images/user-avatar.jpg','',array('class' => 'circleimg')) }}
											
										</div>
										<span class="dark">by {{ $rw->reviewer }}</span><br/>
										
										{{ HTML::image('travel/images/check.png') }}<br/>
										
									</div>
									
								</div>
							</div>
							<div class="col-md-8 offset-0">
								<div class="padding20">
									<span class="opensans size16 dark">{{ $rw->subject }}</span><br/>
									<span class="opensans size13 lgrey">{{ $rw->datesubmitted }}</span><br/>
									<p>{{ $rw->description }}</p>	
									<ul class="circle-list">
										<li>4.5</li>
										<li>3.8</li>
										<li>4.2</li>
										<li>5.0</li>
										<li>4.6</li>
										<li>4.8</li>
									</ul>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
							
						<div class="line2"></div>
						<?php } ?>
						<div class="clearfix"></div>

					</div>
        <!-- TAB 6 -->
        
      </div>
    </div>
    <div class="col-md-4" >
      <div class="pagecontainer2 testimonialbox">
        <div class="cpadding0 mt-10"> <span class="icon-quote"></span>
          <p class="opensans size16 grey2">It was very comfortable to stay and staff were pleasant and welcoming.<br/>
            <span class="lato lblue bold size13"><i>by Ellison from United Kingdom</i></span></p>
        </div>
      </div>
      <div class="pagecontainer2 mt20 needassistancebox">
        <div class="cpadding1"> <span class="icon-help"></span>
          <h3 class="opensans">Need Assistance?</h3>
          <p class="size14 grey">Our team is 24/7 at your service to help you with your booking issues or answer any related questions</p>
          <p class="opensans size30 lblue xslim">1-866-599-6674</p>
        </div>
      </div>
      <br/>
      </div>
  </div>
</div>
<!-- END OF CONTENT -->
	<!-- FOOTER -->
	<div class="footerbgblack">
		<div class="container">		
			<div class="col-md-3">
				<span class="ftitleblack">Let's socialize</span>
				<div class="scont">
					<a href="#" class="social1b">{{ HTML::image('travel/images/icon-facebook.png') }}</a>
					<a href="#" class="social2b">{{ HTML::image('travel/images/icon-twitter.png') }}</a>
					<a href="#" class="social3b">{{ HTML::image('travel/images/icon-gplus.png') }}</a>
					<a href="#" class="social4b">{{ HTML::image('travel/images/icon-youtube.png') }}</a>
					<br/><br/><br/>
					<a href="#">{{ HTML::image('travel/images/logosmal2.png') }}</a><br/>
					<span class="grey2">&copy; 2013  |  <a href="#">Privacy Policy</a><br/>
					All Rights Reserved </span>
					<br/><br/>
				</div>
			</div>
			<!-- End of column 1-->
			<div class="col-md-3">
				<span class="ftitleblack">Travel Specialists</span>
				<br/><br/>
				<ul class="footerlistblack">
					<li><a href="#">Golf Vacations</a></li>
					<li><a href="#">Ski & Snowboarding</a></li>
					<li><a href="#">Disney Parks Vacations</a></li>
					<li><a href="#">Disneyland Vacations</a></li>
					<li><a href="#">Disney World Vacations</a></li>
					<li><a href="#">Vacations As Advertised</a></li>
				</ul>
			</div>
			<!-- End of column 2-->		
			<div class="col-md-3">
				<span class="ftitleblack">Travel Specialists</span>
				<br/><br/>
				<ul class="footerlistblack">
					<li><a href="#">Weddings</a></li>
					<li><a href="#">Accessible Travel</a></li>
					<li><a href="#">Disney Parks</a></li>
					<li><a href="#">Cruises</a></li>
					<li><a href="#">Round the World</a></li>
					<li><a href="#">First Class Flights</a></li>
				</ul>				
			</div>
			<!-- End of column 3-->		
			<div class="col-md-3 grey">
				<span class="ftitleblack">Newsletter</span>
				<div class="relative">
					<input type="email" class="form-control fccustom2black" id="exampleInputEmail1" placeholder="Enter email">
					<button type="submit" class="btn btn-default btncustom">Submit{{ HTML::image('travel/images/arrow.png') }}</button>
				</div>
				<br/><br/>
				<span class="ftitleblack">Customer support</span><br/>
				<span class="pnr">1-866-599-6674</span><br/>
				<span class="grey2">office@travel.com</span>
			</div>			
			<!-- End of column 4-->			
		</div>	
	</div>
	<div class="footerbg3black">
		<div class="container center grey"> 
		<a href="#">Home</a> | 
		<a href="#">About</a> | 
		<a href="#">Last minute</a> | 
		<a href="#">Early booking</a> | 
		<a href="#">Special offers</a> | 
		<a href="#">Blog</a> | 
		<a href="#">Contact</a>
		<a href="#top" class="gotop scroll">{{ HTML::image('travel/images/spacer.png') }}</a>
		</div>
	</div>
<div id="popupmodal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header"><button type="button" class="close" data-dismiss="modal">X</button>
		</div>
        <div class="modal-body">
		<iframe src="http://www.safarinow.com/RequestAQuote.aspx?spid={{ $hotel['id'] }}&amp;source=8354" border="0" scrolling="auto" frameborder="0" height="700px" width="99.6%"></iframe>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>	
   <!-- Javascript -->	
   {{ HTML::script('travel/assets/js/js-details.js') }}
  
   <script type="text/javascript" >
    	function initialize() {

	"use strict";

		  // Create an array of styles.

		var styles = [

			{

				featureType: 'road.highway',

				elementType: 'all',

				stylers: [

					{ hue: '#e5e5e5' },

					{ saturation: -100 },

					{ lightness: 72 },

					{ visibility: 'simplified' }

				]

			},{

				featureType: 'water',

				elementType: 'all',

				stylers: [

					{ hue: '#30a5dc' },

					{ saturation: 47 },

					{ lightness: -31 },

					{ visibility: 'simplified' }

				]

			},{

				featureType: 'road',

				elementType: 'all',

				stylers: [

					{ hue: '#cccccc' },

					{ saturation: -100 },

					{ lightness: 44 },

					{ visibility: 'on' }

				]

			},{

				featureType: 'landscape',

				elementType: 'all',

				stylers: [

					{ hue: '#ffffff' },

					{ saturation: -100 },

					{ lightness: 100 },

					{ visibility: 'on' }

				]

			},{

				featureType: 'poi.park',

				elementType: 'all',

				stylers: [

					{ hue: '#d2df9f' },

					{ saturation: 12 },

					{ lightness: -4 },

					{ visibility: 'on' }

				]

			},{

				featureType: 'road.arterial',

				elementType: 'all',

				stylers: [

					{ hue: '#e5e5e5' },

					{ saturation: -100 },

					{ lightness: 56 },

					{ visibility: 'on' }

				]

			},{

				featureType: 'administrative.locality',

				elementType: 'all',

				stylers: [

					{ hue: '#000000' },

					{ saturation: 0 },

					{ lightness: 0 },

					{ visibility: 'on' }

				]

			}

		];
		var myLatlng = new google.maps.LatLng('{{ $hotel['latitude'] }}','{{ $hotel['longitude'] }}');
	  // Create a new StyledMapType object, passing it the array of styles,

	  // as well as the name to be displayed on the map type control.

	  var styledMap = new google.maps.StyledMapType(styles,

		{name: "Styled Map"});
	  // Create a map object, and include the MapTypeId to add
	  var mapOptions = {
		zoom: 15,
		center: myLatlng,
		mapTypeControlOptions: {
		  mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
		}

	  };
	  var map = new google.maps.Map(document.getElementById('map-canvas'),
		mapOptions);

	  var marker = new google.maps.Marker({

		  position: myLatlng,

		  map: map,

		  title: '{{ $hotel['name'] }}'

	  });

	  //Associate the styled map with the MapTypeId and set it to display.

	  map.mapTypes.set('map_style', styledMap);

	  map.setMapTypeId('map_style');
	}
	
	
	
	function loadScript() {

	"use strict";

	    setTimeout(function (){

		  $('#map-canvas').css({'display':'block'});

		  var script = document.createElement('script');

		  script.type = 'text/javascript';

		  script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +

			  'callback=initialize';

		  document.body.appendChild(script);

		  

		  google.maps.event.trigger(map, 'resize');

	    }, 500);	

	}

   </script>
  <!-- {{ HTML::script('travel/assets/js/initialize-google-map.js') }}-->
   {{ HTML::script('travel/assets/js/jquery.customSelect.js') }}
   {{ HTML::script('travel/assets/js/functions.js') }}
   {{ HTML::script('travel/assets/js/jquery.nicescroll.min.js') }}
  {{ HTML::script('travel/rs-plugin/js/jquery.themepunch.revolution.min.js') }}
    {{ HTML::script('travel/assets/js/jquery.carouFredSel-6.2.1-packed.js') }}	
    <!-- Custom Select -->
	{{ HTML::script('travel/assets/js/jquery.customSelect.js') }}
    <!-- Custom Select helper-plugins/jquery.touchSwipe.min.js-->
	{{ HTML::script('travel/assets/js/helper-plugins/jquery.touchSwipe.min.js') }}
    <!-- JS Ease -->
    {{ HTML::script('travel/assets/js/helper-plugins/jquery.mousewheel.min.js') }}
    <!-- Custom functions -->
    {{ HTML::script('travel/assets/js/helper-plugins/jquery.transit.min.js') }}
    <!-- jQuery KenBurn Slider --> 
    {{ HTML::script('travel/assets/js/helper-plugins/jquery.ba-throttle-debounce.min.js') }}
    <!-- Counter -->	
    {{ HTML::script('travel/assets/js/counter.js') }}
    <!-- Nicescroll  -->	
	{{ HTML::script('travel/assets/js/initialize-carousel-detailspage.js') }}
    <!-- Picker -->	
	{{ HTML::script('travel/assets/js/jquery.easing.js') }}
    <!-- Bootstrap -->	
    {{ HTML::script('travel/dist/js/bootstrap.min.js') }}
	 <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    {{ HTML::script('js/bootstrap-ajax.js') }}
	<script type="text/javascript">
        $(document).ready(function() {
			var frameSrc = "/laravel/public/admin";
			$('.booknow').click(function(){
		            
					$('#popupmodal').on('show', function () {
			
					$('iframe').attr("src",frameSrc );
				  
					});
					$('#popupmodal').modal({show:true});
				});
		});
    </script>
@stop