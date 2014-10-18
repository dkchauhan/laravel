@extends('layouts.hdefault')
@section('content')
	<!-- Top wrapper -->			  
	<div class="navbar-wrapper3 navbar-fixed-top2">
      <div class="container">
		<div class="navbar mtnav2">

			<div class="container offset-3">
			  <!-- Navigation-->
			  <div class="navbar-header">
				<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a href="{{ URL::to('/') }}" class="navbar-brand">{{ HTML::image('travel/updates/update1/img/logo.png','Travel Agency Logo',array('class'=> 'logo')) }}</a>
			  </div>
			  <div class="navbar-collapse collapse">
				<ul class="nav nav2 navlight navbar-nav navbar-left">
				  <li class="dropdown active">
					<a data-toggle="dropdown" class="dropdown-toggle" href="http://sastay.co.za/laravel/public/">Home</a>
				  </li>
				  <li >
					<a href="http://sastay.co.za/laravel/public/list">Hotels </a>
					</li>
				  <li><a href="#">Flights</a></li>
				</ul>
			  </div>
			  <!-- /Navigation-->			  
			</div>
		
        </div>
      </div>
    </div>
	<!-- /Top wrapper -->
		
	<!--
	#################################
		- THEMEPUNCH BANNER -
	#################################
	-->

	<div id="dajy" class="fullscreen-container2 mtslideb sliderbg fixed">
			{{ Form::open(['url' => 'list','method'=>'post','name'=> 'form']) }}
			<div class="searchcontainer textcenter" style="">
				<span class="lato size48 slim white ">Where do you want to go?</span><br/>

				<div class=" wh95percent center">
					<input type="text" class="form-control inph left" placeholder="ex: New York" name="search"></input>
					<button class="btn btn-default nbtn-search right" type="button"><span class="glyphicon glyphicon-search"></span></button>
					
				</div>

			</div>
			{{ Form::close() }}
			
			<div class="fullscreenbanner">
				<ul>

					<!-- papercut fade turnoff flyin slideright slideleft slideup slidedown-->
				
					<!-- FADE -->
					<li data-transition="fade" data-slotamount="1" data-masterspeed="300"> 										
						{{ HTML::image('travel/updates/update1/img/slider/slide1.jpg') }}
						<div class="tp-caption scrolleffect sft"
							 data-x="center"
							 data-y="120"
							 data-speed="1000"
							 data-start="800"
							 data-easing="easeOutExpo">
						</div>	
					</li>	

					<!-- FADE -->
					<li data-transition="fade" data-slotamount="1" data-masterspeed="300"> 										
						
						{{ HTML::image('travel/updates/update1/img/slider/slide2.jpg') }}
						<div class="tp-caption scrolleffect sft"
							 data-x="center"
							 data-y="120"
							 data-speed="1000"
							 data-start="800"
							 data-easing="easeOutExpo"  >

						</div>	
					</li>	
					
					<!-- FADE -->
					<li data-transition="fade" data-slotamount="1" data-masterspeed="300"> 										
						{{ HTML::image('travel/updates/update1/img/slider/slide3.jpg') }}
						<div class="tp-caption scrolleffect sft"
							 data-x="center"
							 data-y="120"
							 data-speed="1000"
							 data-start="800"
							 data-easing="easeOutExpo">

						</div>	
					</li>
					
					<!-- FADE -->
					<li data-transition="fade" data-slotamount="1" data-masterspeed="300"> 										
						{{ HTML::image('travel/updates/update1/img/slider/slide4.jpg') }}
						<div class="tp-caption scrolleffect sft"
							 data-x="center"
							 data-y="120"
							 data-speed="1000"
							 data-start="800"
							 data-easing="easeOutExpo">

						</div>	
					</li>
					
					
					
				</ul>
				<div class="tp-bannertimer none"></div>
			</div>
		</div>

		<!--
		##############################
		 - ACTIVATE THE BANNER HERE -
		##############################
		-->
		<script type="text/javascript">

			var tpj=jQuery;
			tpj.noConflict();

			tpj(document).ready(function() {

			if (tpj.fn.cssOriginal!=undefined)
				tpj.fn.css = tpj.fn.cssOriginal;

				tpj('.fullscreenbanner').revolution(
					{
						delay:9000,
						startwidth:1170,
						startheight:600,

						onHoverStop:"off",						// Stop Banner Timet at Hover on Slide on/off

						thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
						thumbHeight:50,
						thumbAmount:3,

						hideThumbs:0,
						navigationType:"bullet",				// bullet, thumb, none
						navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

						navigationStyle:false,				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


						navigationHAlign:"left",				// Vertical Align top,center,bottom
						navigationVAlign:"bottom",					// Horizontal Align left,center,right
						navigationHOffset:30,
						navigationVOffset:30,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:20,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:20,
						soloArrowRightVOffset:0,

						touchenabled:"on",						// Enable Swipe Function : on/off


						stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
						stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

						hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
						hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
						hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


						fullWidth:"on",							// Same time only Enable FullScreen of FullWidth !!
						fullScreen:"off",						// Same time only Enable FullScreen of FullWidth !!


						shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

					});
					
					tpj('.nbtn-search').click(function() {
					form.submit();
					});


		});
		
		</script>
		

		



	<!-- WRAP -->
	<div class="wrap cst03 bgfix " >
		


		

		<div class="container lnews">
			Latest news			
		</div>
			
			
		<div class="masonry">
			<div class="item wt2 ht2">
				<div class="msbox2"><a href="#">{{ HTML::image('travel/updates/update1/img/pic01.jpg','',array('class'=> 'fhimg left')) }}</a></div>
			</div>
			<div class="item ht2">
				<div class="msbox2">
				<a href="#"><img src="updates/update1/img/pic02.jpg" class="fhimg" alt=""></a>
					<p class="msctext padding20">
						<span class="newstitle"><a href="#">The Experts in African Safari Travel</a></span><br/><br/>
						Sed auctor erat sit amet lorem venenatis, in feugiat nisl fermentum. Nam luctus adipiscing dapibus. Nunc leo felis, ornare non commodo a, elementum a risus. 
					</p>
				</div>
			</div>
			<div class="item ">
				<div class="msbox"><a href="#">{{ HTML::image('travel/updates/update1/img/pic03.jpg','',array('class'=> 'fhimg')) }}</a></div>
			</div>
			<div class="item ht2">
				<div class="msbox2"><a href="#">{{ HTML::image('travel/updates/update1/img/pic04.jpg','',array('class'=> 'fhimg')) }}</a>
					<p class="msctext padding20">
						<span class="newstitle"><a href="#">Velassaru Beach Resort Island Paradise - Maldives</a></span>
						<span class="glyphicon glyphicon-star lblue"></span>
						<span class="glyphicon glyphicon-star lblue"></span>
						<span class="glyphicon glyphicon-star lblue"></span>
						<span class="glyphicon glyphicon-star lblue"></span>
						<span class="glyphicon glyphicon-star lblue"></span>
						<br/><br/>
						Sed auctor erat sit amet lorem venenatis, in feugiat nisl fermentum. Nam luctus adipiscing dapibus. Nunc leo felis, ornare non commodo a, elementum a risus. 
					</p>
				</div>
			</div>		
			<div class="item wt2">
				<div class="msbox">
					<div class="w50percent msctext padding20 left">
						<span class="newstitle"><a href="#">Aquaventure Waterpark and The Lost Chambers Aquarium</a></span><br/><br/>
						Sed auctor erat sit amet lorem venenatis, in feugiat nisl fermentum. Nam luctus adipiscing dapibus. Nunc leo felis, ornare non commodo a.
					</div>		
					<div class="w50percentlast right">
						<a href="#">{{ HTML::image('travel/updates/update1/img/pic06.jpg','',array('class'=> 'fwimg')) }}</a>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="msbox"><a href="#">{{ HTML::image('travel/updates/update1/img/pic05.jpg','',array('class'=> 'fhimg')) }}</a></div>
			</div>
			
		</div>
			
		<div>
		<br/>
		<br/>
		<br/>
		</div>
			
			
			
			
			

		
		
		<!-- FOOTER -->

		<div class="footerbg lcfix">
			<div class="container">		
				<footer>
					<div class="footer">
						<a href="#" class="social1">{{ HTML::image('travel/images/icon-facebook.png') }}</a>
						<a href="#" class="social2">{{ HTML::image('travel/images/icon-twitter.png') }}</a>
						<a href="#" class="social3">{{ HTML::image('travel/images/icon-gplus.png') }}</a>
						<a href="#" class="social4">{{ HTML::image('travel/images/icon-youtube.png') }}</a>
						<br/><br/>
						Copyright &copy; 2014 <a href="#">Travel Agency</a> All rights reserved. <!--<a href="http://titanicthemes.com">TitanicThemes.com</a>-->
						<br/><br/>
						<a href="#top" id="gotop2" class="gotop">{{ HTML::image('travel/images/spacer.png') }}</a>
					</div>
				</footer>
			</div>	
		</div>
		
		

		
		
	</div>
	<!-- END OF WRAP -->
	
	
	

    <!-- Javascript -->
	
    <!-- This page JS -->
	{{ HTML::script('travel/updates/update1/js/js-new-homepage.js') }}
	<!-- Easing -->
   {{ HTML::script('travel/assets/js/jquery.easing.js') }}
	
    <!-- jQuery KenBurn Slider  -->
    {{ HTML::script('travel/rs-plugin/js/jquery.themepunch.revolution.min.js') }}
	
    <!-- Nicescroll  -->	
	{{ HTML::script('travel/assets/js/jquery.nicescroll.min.js') }}
	
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