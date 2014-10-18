@extends('layouts.master')
 
@section('title') Users @stop
 
@section('content')
 
<div class="col-lg-12 col-lg-offset-1" style="margin-left:0px;">
 
    <h1><i class="fa fa-users"></i> User Administration <a href="admin/logout" class="btn btn-default pull-right">Logout</a></h1>
 
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
 
            <thead>
                <tr>
                    <th>Image</th>
					<th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Date/Time Added</th>
                    <th></th>
                </tr>
            </thead>
 
            <tbody>
                @foreach ($users as $user)
                <tr>
				    <td><img src="{{ $user->image }}" height="75" width="75" /></td>
                    <td>{{ $user->getFullName() }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                    <td>
                        <a href="user/{{ $user->id }}/edit" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                        {{ Form::open(['url' => 'user/' . $user->id, 'method' => 'DELETE']) }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </tbody>
 
        </table>
    </div>
 
    <a href="user/create" class="btn btn-success">Add User</a>
 
</div>
 
@stop