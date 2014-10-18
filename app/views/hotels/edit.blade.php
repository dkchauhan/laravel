@extends('layouts.master')
 
@section('title') View Hotel @stop
 
@section('content')
 
<div class='col-xs-10'>
 
    @if ($errors->has())
        @foreach ($errors->all() as $error)
            <div class='bg-danger alert'>{{ $error }}</div>
        @endforeach
    @endif
 
    <h1><i class='fa fa-user'></i> Edit User</h1>
 
    {{ Form::model($hotel, ['role' => 'form', 'url' => '/hotel/' . $hotel->id, 'method' => 'PUT']) }}
 
    <div class='col-xs-6'>
        {{ Form::label('hotel_name', 'Hotel Name') }}
        {{ Form::text('name', null, ['placeholder' => 'Hotel Name', 'class' => 'form-control']) }}
    </div>
 
    <div class='col-xs-6'>
        {{ Form::label('type', 'Hotel Type') }}
        {{ Form::text('type', null, ['placeholder' => 'Hotel Type', 'class' => 'form-control']) }}
    </div>
 	
    <div class='col-xs-6'>
        {{ Form::label('typedesc', 'Type description') }}
        {{ Form::text('typedesc', null, ['placeholder' => 'Type description', 'class' => 'form-control']) }}
    </div>
 
    <div class='col-xs-6'>
        {{ Form::label('shortdesc', 'Description') }}
        {{ Form::textarea('shortdesc', null, ['placeholder' => 'Username', 'class' => 'form-control']) }}
    </div>
 
    <div class='col-xs-6'>
        {{ Form::label('status', 'Status') }}
        {{ Form::text('status', null, ['placeholder' => 'Status', 'class' => 'form-control']) }}
    </div>
	
	<div class='col-xs-6'>
        {{ Form::label('rating', 'Rating') }}
        {{ Form::text('rating', null, ['placeholder' => 'rating', 'class' => 'form-control']) }}
    </div>
	<div class='col-xs-6'>
        {{ Form::label('available', 'Available') }}
        {{ Form::text('available', null, ['placeholder' => 'available', 'class' => 'form-control']) }}
    </div>
	<div class='col-xs-6'>
        {{ Form::label('responsehours', 'Responsehours') }}
        {{ Form::text('responsehours', null,  ['placeholder' => 'responsehours', 'class' => 'form-control']) }}
    </div>
	<div class='col-xs-6'>
        {{ Form::label('tradingcurrency', 'Tradingcurrency') }}
        {{ Form::text('tradingcurrency', null,  ['placeholder' => 'tradingcurrency', 'class' => 'form-control']) }}
    </div>
	<div class='col-xs-6'>
        {{ Form::label('longitude', 'Longitude') }}
        {{ Form::text('longitude', null, ['placeholder' => 'longitude', 'class' => 'form-control']) }}
    </div>
	<div class='col-xs-6'>
        {{ Form::label('latitude', 'Latitude') }}
        {{ Form::text('latitude', null, ['placeholder' => 'latitude', 'class' => 'form-control']) }}
    </div>
	<div class='col-xs-6'>
        {{ Form::label('smileyRating', 'SmileyRating') }}
        {{ Form::text('smileyRating', null, ['placeholder' => 'smileyRating', 'class' => 'form-control']) }}
    </div>
 
    <div class='col-xs-6'>
        {{ Form::label('destinations', 'Destinations') }}
        {{ Form::textarea('destinations', null, ['placeholder' => 'destinations', 'class' => 'form-control']) }}
    </div>
 
    <div class='col-xs-6'>
        {{ Form::label('minpps', 'Min Price') }}
        {{ Form::text('minpps', null, ['placeholder' => 'minpps', 'class' => 'form-control']) }}
    </div>
 
    <div class='col-xs-10'>
        {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
    </div>
 
    {{ Form::close() }}
 
</div>
 
@stop