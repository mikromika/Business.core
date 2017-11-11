@extends('layouts.app')
@section('content')
Bio Profile <br>

Authentication check  <br>
<!-- Authentication check -->
  @if (Auth::check())
  You are logged in as user_ID: {{ Auth::user()->id }} ! <br>


  @foreach(auth()->user()->roles as $role)
             Your role ID is: {{ $role->id }} !<br>
  @endforeach
   
  @else

Authentication check failed   <br>
You are not logged in

  @endif
@endsection
