@extends('layout')

@section('content')
     @foreach($users as $user)
        <p>{{ $user->name }}</p>
        {{ HTML::style('css/style.css') }}
    @endforeach
@stop