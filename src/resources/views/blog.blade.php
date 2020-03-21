@extends('pets::layouts.layout')

@section('content')
  <h1>This is a view from the package but using layouts</h1>

  @foreach($dogs as $dog)
    <p>Name: {{ $dog->name }}</p>
  @endforeach

  @foreach($users as $user)
    <p> {{ $user->name }} </p>
  @endforeach

@endsection
