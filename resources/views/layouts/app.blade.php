
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

@include('layouts.header')


</head> <!-- End of Header  -->
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbarheader">
                      <!-- Branding Image -->
                    <a class="navbar-brand" id="app-name" href="{{ url('/') }}">
                        DEV_{{ config(('version.name'))}}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                           <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication check -->
                        @if (Auth::check())
                        <li class="dropdown">   <!-- First menu -->
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                           menu-name-dropdown   <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                               @include('layouts.logout-dropdown')
                               @include('layouts.posts-dropdown')
                          </li>
                        </ul>
                            <li class="dropdown"> <!-- Second menu -->
                               <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              Logged in as <b>   {{ Auth::user()->username }} </b><span class="caret"></span>
                               </a>
                         <ul class="dropdown-menu" role="menu">
                            @include('layouts.logout-dropdown')
                            @include('layouts.posts-dropdown')
                       </li>
                         </ul>
                        @else <!-- Authentication check Else if not logged in -->

                            DEV_{{ config(('version.name')) .(' ')
                               .config('version.pri_ver').('. ').
                               config('version.major_ver') .('. ').
                               config('version.minor_ver') .('. ').
                               config('version.patch_level')
                             }}  </li>

                      <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
        @yield('public-content')

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
