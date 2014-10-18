@extends('layouts.myaccount')
 
@section('title') Favorites @stop
 
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

 
<div class="col-lg-10 col-lg-offset-1" style="margin-left:20px;padding-top:100px;">
 
    <h1><i class="fa fa-users"></i> User Favorite <a href="admin/logout" class="btn btn-default pull-right">Logout</a></h1>
 
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
 
            <thead>
                <tr>
                    <th>Image</th>
					<th>Name</th>
					<th>Type</th>
                    <th>Description</th>
                    <th>Date/Time Added</th>
                    <th></th>
                </tr>
            </thead>
 
            <tbody>
			<?php //print_r($favorites); ?>
                @foreach ($favorites as $favorite)
                <tr>
				    <td><img src="{{ $favorite->image1 }}" height="75" width="75" /></td>
                    <td>{{ $favorite->name }}</td>
                    <td>{{ $favorite->type }}</td>
                    <td>{{  substr($favorite->shortdesc,0,80) }}</td>
                    <td>{{ $favorite->created_at }}</td>
                    <td>
                        
                        {{ Form::open(['url' => 'favorite/' . $favorite->fid, 'method' => 'DELETE']) }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </tbody>
 
        </table>
    </div>
 
</div>
 
@stop