<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">    {{--  CSRF Token goes here--}}

{{-- route will check if logged in and apply correct title for page --}}
    @if (Route::has('login'))
          @if (Auth::check())
<title>Mikromika's homepage dev mode</title>
          @else
<title>Mikromika's homepage at Guest mode</title>
          @endif
@endif         {{--  End of Title check --}}
<!-- here is comment as Styles  -->

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="css/css.common.css" rel="stylesheet" >
