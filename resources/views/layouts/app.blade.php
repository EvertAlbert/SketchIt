<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SketchIt</title>

    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lato" rel="stylesheet">

    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/screen.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chat.css') }}" rel="stylesheet">
    <link href="{{ asset('css/gamecanvas.css') }}" rel="stylesheet">
</head>
<body>
<nav>

    <ul>
        @guest
            <header>
                <img src="{{url("/images/logo.svg")}}" alt="logo" class="smallLogo">
                <nav class="navButtons">
                    <a class="pictionaryButton" href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))

                        <a class="pictionaryButton register" href="{{ route('register') }}">Register</a>
                </nav>
            </header>
        @endif
        @else
            <header>
                <img src="{{url("/images/logo.svg")}}" alt="logo" class="smallLogo">
                <nav class="navButtons">
                    <div role="button" v-pre class="pictionaryButton usernameButton" id="username">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </div>

                    <a class="pictionaryButton" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </nav>
            </header>
        @endguest
    </ul>
</nav>
<div class="content">

    @yield('join')

    @if (Route::has('joining'))
        @yield('content')

    @endif
    @if (Route::has('game'))
        @yield('content')

        @endif


</div>

<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
