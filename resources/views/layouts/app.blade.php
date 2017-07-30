
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
@include('layouts.header')
</head> <!-- End of Header  -->

<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                      <!-- Branding Image -->
                    <a class="navbar-brand" id="app-name" href="{{ url('/') }}">

                        {{ config('app.name') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                           <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication check -->
                        @if (Auth::check())
                        <li class="dropdown">
                               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              Logged in as <b>   {{ Auth::user()->username }} </b><span class="caret"></span>
                               </a>
                            @include('layouts.logout-dropdown')
                           </li>

                        @else
                            <li>  {{ config('app.name'). ' ' .config('app.version')  }} </li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
