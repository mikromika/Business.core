@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-primary">
                <div class="panel-heading"><p> Welcome to Mikromika's homepage</p></div>
                <div class="panel-body">
                  <!-- route will check if logged in and apply correct content for page -->

                  <div class="content">
                      @if (Route::has('login'))
                      <div class="title m-b-md">
                        @if (Auth::check())

<p>    At moment, we are running at APP {{ config('version.name'). ('  ') }} </p>
<p>   And Logged in as <b>{{ Auth::user()->username }}</b></p>
<p>


  VERSION: <b>
                  {{
                     config('version.pri_ver').('. ').
                     config('version.major_ver') .('. ').
                     config('version.minor_ver') .('. ').
                     config('version.patch_level')
                                                            }}
                                                                </b><br><br>
APP Fingerprint: <b>
                  {{ config('app.key') }} </b><br>

APP Enviroment: <b>
                  {{ config('app.env') }} </b><br>


</p>

                        <div class="links">
                            <a href="https://laravel.com/docs">Documentation</a>
                            <a href="https://laracasts.com">Laracasts</a>
                            <a href="https://laravel-news.com">News</a>
                            <a href="https://forge.laravel.com">Forge</a>
                            <a href="https://github.com/laravel/laravel">GitHub</a>
                        </div>
                  </div>




                        @else
                      <div class="title m-b-md">

          <p> Mikromika's homepage is under heavy programming   <br>
          This latest update from local Git. <br>
          This version source code is not availble until
          final version 1.0.0 </p>
          <br><br>




          <br><br><br><br>

                      <div class="links" >
                        <li><a href="https://laravel.com/docs">Documentation</a> </li>
                        <li><a href="https://laracasts.com">Laracasts</a> </li>
                        <li><a href="https://laravel-news.com">News</a> </li>
                        <li><a href="https://forge.laravel.com">Forge</a> </li>
                        <li><a href="https://github.com/laravel/laravel">GitHub</a> </li>
                      </div>

                      @endif
                  </div>
              @endif
                  </div>
              </div>  <!-- END of panel body -->

            </div> <!-- END of panel default-->
            </div>  <!-- END of col -->
        </div>   <!-- END of row -->
    </div> <!-- END of container -->
</div>
@endsection
