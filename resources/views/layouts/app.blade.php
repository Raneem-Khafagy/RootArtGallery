{{--
    Navbar
    Header
    Body
    Footer
--}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('headers')
   <link rel="shortcut icon" href="{{asset('storage/logo/fav-icon.png')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>

<body>
<div id='app-box-model'class='content-wrapper'>
    {{--Navigation bar--}}
    @include('layouts.Navigation')
    <main>
    {{-- fixed in structure but variable content --}}
        @yield('content')
    </main>
    {{--Footer bar showes only if authanticated--}}
    @auth
        @include('layouts.Footer')
    @endauth

</div>
</body>
<script src="{{'js\app.js'}}"></script>

@yield("extra_scripts")

</html>
