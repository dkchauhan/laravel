@extends('layouts.myaccount')

@section('title') My Account @stop
 
@section('content')
 <div class="dashboard-left offset-0 textcenter" style="float:left;padding-top:100px;width:15%;padding-left:25px;background:#F2F2F2;">
  <span class="size12 grey lh5">Welcome to Myaccount Panel</span><br/>
  <a href="#">{{ HTML::image('travel/images/dash/avatar.jpg','') }}</a><br/>
  <span class="size12 dark">Administrator</span><br/>
  <a href="{{ URL::to('admin/logout') }}">{{ HTML::image('travel/images/dash/logout.png','') }}</a><br/>
  <br/>
  <br/>
  <!-- Nav tabs -->
  <ul class="nav dashboard-tabs">
    <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" id="myTabDrop1" href="#">
      <div class="dash-ct"> <span class="left"></span> <span class="dtxt">My Account <b class="lightcaret "></b></span> </div>
      </a>
    </li>
	 <li> <a href="{{ URL::to('user') }}/{{ AUTH::id() }}/edit" >
      <div class="dash-ct"> <span class="appearance-icon left"></span> <span class="dtxt">My Account</span> </div>
      </a></li>
    <li> <a href="{{ URL::to('favorite') }}" >
      <div class="dash-ct"> <span class="pages-icon left"></span> <span class="dtxt">My Favorite List</span> </div>
      </a></li>
   
    <li> <a href="#settings" data-toggle="tab">
      <div class="dash-ct"> <span class="settings-icon left"></span> <span class="dtxt">Settings</span> </div>
      </a></li>
  </ul>
  <br/>
  
  <div class="clearfix"></div>
</div>
<!-- LEFT MENU -->

<div class='col-lg-4 col-lg-offset-4' style="margin-left:20px;padding-top:100px;">
 
    @if ($errors->has())
        @foreach ($errors->all() as $error)
            <div class='bg-danger alert' style="color:#009933; background:#FFFFFF; border:2px solid;margin-top:15px;">{{ $error }}</div>
        @endforeach
    @endif
 
    <h1><i class='fa fa-user'></i> Edit User</h1>
 
    {{ Form::model($user, ['role' => 'form', 'url' => '/user/' . $user->id, 'method' => 'PUT']) }}
 
    <div class='form-group'>
        {{ Form::label('first_name', 'First Name') }}
        {{ Form::text('first_name', null, ['placeholder' => 'First Name', 'class' => 'form-control']) }}
    </div>
 
    <div class='form-group'>
        {{ Form::label('last_name', 'Last Name') }}
        {{ Form::text('last_name', null, ['placeholder' => 'Last Name', 'class' => 'form-control']) }}
    </div>
 
    <div class='form-group'>
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control']) }}
    </div>
 
    <div class='form-group'>
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) }}
    </div>
 
    <div class='form-group'>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}
    </div>
 
    <div class='form-group'>
        {{ Form::label('password_confirmation', 'Confirm Password') }}
        {{ Form::password('password_confirmation', ['placeholder' => 'Confirm Password', 'class' => 'form-control']) }}
    </div>
 
    <div class='form-group'>
        {{ Form::submit('Login', ['class' => 'btn btn-primary']) }}
    </div>
 
    {{ Form::close() }}
 
</div>
 
@stop