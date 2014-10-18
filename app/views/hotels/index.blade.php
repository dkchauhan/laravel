@extends('layouts.master')
 
@section('title') Hotels @stop
 
@section('content')

<div class="col-lg-12 col-lg-offset-1" style="margin-left:0px;">
 
    <h1><i class="fa fa-users"></i> Hotels Administration <a href="admin/logout" class="btn btn-default pull-right">Logout</a></h1>
 
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
 
            <thead>
                <tr>
                    <th>Name</th>
					<th>Image1</th>
                    <th>Type</th>
                    <th>Shortdesc</th>
                    <th>Status</th>
                    <th>Destinations</th>
                    <th>Minpps</th>
                    <th>Date/Time Added</th>
                    <th></th>
                </tr>
            </thead>
 
            <tbody>
                @foreach ($hotels as $hotel)
                <tr>
                    <td>{{ $hotel->name }}</td>
					<td><img src="{{ $hotel->image1 }}" alt="" height="55" width="60" /></td>
                    <td>{{ $hotel->type }}</td>
                    <td>{{ $hotel->shortdesc }}</td>
                    <td>{{ $hotel->status }}</td>
					<td>{{ $hotel->destinations }}</td>
                    <td>{{ $hotel->minpps }}</td>
                    <td>{{ $hotel->created_at->format('F d, Y h:ia') }}</td>
                    <td>
                        <a href="hotel/{{ $hotel->id }}/edit" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                        {{ Form::open(['url' => 'hotel/' . $hotel->id, 'method' => 'DELETE']) }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </tbody>
 
        </table>
    </div>
 
    {{ $hotels->links() }}
</div>

@stop