<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="../css/main.css" rel="stylesheet">
</head>
<body>
<div class="flex-center position-ref ">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">

        <div class="header">
            <img src="/img/slider-item-01-500x400.png">
            <div class="title m-b-md">
                Pizza House
            </div>
            <div class="links">
                <a href="/" class="link">Home</a>
                <div class="dropdown">
                    <span class="link">Tutorial</span>
                    <div class="dropdown-content">
                        <a href="/passdata">Pass Data</a>
                        <a href="/ifstatment">if statment</a>
                        <a href="/loop">loop</a>
                        <a href="/queryparameters?name=adnan">Query parameters</a>
                        <a href="/routeparameters/320">Route parameters</a>
                    </div>
                </div>
                <a href="/pizzas" class="link">Pizzas</a>
            </div>
        </div>

        @yield('content')


    </div>

</div>
<footer>
    copyright 2020 Pizza House
</footer>
</body>
</html>
