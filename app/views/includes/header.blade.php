	
	<div class="navbar-wrapper2 navbar-fixed-top">
      <div class="container">
		<div class="navbar mtnav">

			<div class="container offset-3">
			  <!-- Navigation-->
			  <div class="navbar-header">
				<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a href="{{ URL::to('/') }}" class="navbar-brand">{{ HTML::image('travel/images/logo.png','Travel Agency Logo',array('class'=> 'logo')) }}</a>
			  </div>
			  <div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-left">
				  <li class="dropdown active">
					<a data-toggle="dropdown" class="dropdown-toggle" href="http://sastay.co.za/laravel/public/">Home</a>
				  </li>
				  <li><a href="http://sastay.co.za/laravel/public/list">Hotels</a></li>
				  <li><a href="#">Flights</a></li>
				</ul>
			  </div>
			  <!-- /Navigation-->			  
			</div>
		
        </div>
      </div>
    </div>