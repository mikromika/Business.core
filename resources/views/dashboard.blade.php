@extends('layouts.app')
@section('content')

<div class="container">
      <div class="row"> {{-- beginng of first row --}}
        <div class="col-md-9 panel-heading">
          <div class="panel panel-default">
            Dashboard heading </div>
             {{-- beginng of panel heading --}}
           </div>

                <div class="panel-body col-md-9">
                <div class="panel panel-default">

                  {{-- begin  of first body for panel --}}

                    You are logged in as user_ID: {{ Auth::user()->id }} ! <br>
                    You are logged in as user_name: {{ Auth::user()->username }} !<br>

         @foreach(auth()->user()->roles as $role)
                   Your role is: {{ $role->name }} !<br>
          @endforeach
          @foreach(auth()->user()->roles as $role)
                     Your role ID is: {{ $role->id }} !<br>
          @endforeach

        </div>   {{-- end of first body for panel --}}
          </div>   {{-- end of first panel-default --}}
            </div>  {{-- end of first row --}}
</div> {{-- end of container --}}


@endsection
