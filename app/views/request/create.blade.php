@extends('layouts.request')
 
@section('title') Create User @stop
 
@section('content')
 
<div class='col-lg-8 col-lg-offset-2'>
 
    @if ($errors->has())
        @foreach ($errors->all() as $error)
            <div class='bg-danger alert'>{{ $error }}</div>
        @endforeach
    @endif
 
    <h1>Request a Quote from The {{ $data['name'] }}</h1>
 
    {{ Form::open(['role' => 'form', 'url' => '/requestAQuote', 'files' => true]) }}
 
    <div class='form-group'>
        <p>Merlene from The Oasis B&B replies within {{ $data['responsehours'] }} hours</p>
    </div>
 
    <div class='form-group' style="height:50px;" >
        <div class="w50percent">
            <div class="wh90percent textleft"> <span class="opensans size13">Check in date</span>
              <input type="text" name="check-in" class="form-control mySelectCalendar" id="datepicker" placeholder="mm/dd/yyyy">
            </div>
          </div>
		  <div class="w50percentlast">
            <div class="wh90percent textleft right"> <span class="opensans size13">Check in date</span>
              <input type="text" name="check-out" class="form-control mySelectCalendar" id="datepicker2" placeholder="mm/dd/yyyy">
            </div>
          </div>
    </div>
 
    <div class='form-group left'>
        {{ Form::label('Adults', 'Adults') }}
        <input type="text" name="adults" style="width:20px" required=""  >
	</div>
	<div class='form-group'>
		 {{ Form::label('Children', 'Children ') }}
       <input type="text" name="children" style="width:20px" >
    </div>
	
	<div class='form-group'>
        {{ Form::label('preference', 'preference') }}
    </div>
	
	<div class='form-group'>
        {{ Form::label('Any specific dietary requirements?', 'Any specific dietary requirements?') }}
        {{ Form::textarea('question', null, ['placeholder' => 'Any Question ?', 'class' => 'form-control']) }}
    </div>
 
    <div class='form-group'>
        {{ Form::label('Name', 'Name') }}
        {{ Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control','required' => '']) }}
    </div>
	
	<div class='form-group'>
        {{ Form::label('Email', 'Email') }}
        {{ Form::email('email', null, ['placeholder' => 'Email', 'class' => 'form-control','required' => '']) }}
    </div>
 
    <div class='form-group'>
        {{ Form::label('Phone No.', 'Phone') }}
        {{ Form::text('phone', null, ['placeholder' => 'phone no.', 'class' => 'form-control']) }}
    </div>
 
    <div class='form-group'>
	<p>By requesting a quote you are under <em>no obligation</em> to pay for any bookings.</p>
        {{ Form::submit('Submit Query', ['class' => 'btn btn-primary']) }}
    </div>
 
    {{ Form::close() }}
 
</div>
  <!-- Javascript -->	
    <script src="http://sastay.co.za/laravel/public/travel/assets/js/js-list4.js"></script>
	
    <!-- Custom Select -->
	<script src="http://sastay.co.za/laravel/public/travel/assets/js/jquery.customSelect.js"></script>
    <!-- Custom Select -->
	<script src="http://sastay.co.za/laravel/public/travel/js/lightbox.js"></script>
    <!-- JS Ease -->	
    <script src="http://sastay.co.za/laravel/public/travel/assets/js/jquery.easing.js"></script>
    <!-- Custom functions -->
    <script src="http://sastay.co.za/laravel/public/travel/assets/js/functions.js"></script>
    <!-- jQuery KenBurn Slider  -->
    <script src="http://sastay.co.za/laravel/public/travel/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <!-- Counter -->	
    <script src="http://sastay.co.za/laravel/public/travel/assets/js/counter.js"></script>
    <!-- Nicescroll  -->	
	<script src="http://sastay.co.za/laravel/public/travel/assets/js/jquery.nicescroll.min.js"></script>
    <!-- Picker -->	
	<script src="http://sastay.co.za/laravel/public/travel/assets/js/jquery-ui.js"></script>
    <!-- Bootstrap -->	
    <script src="http://sastay.co.za/laravel/public/travel/dist/js/bootstrap.min.js"></script>
@stop