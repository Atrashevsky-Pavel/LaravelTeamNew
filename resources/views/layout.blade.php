<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/style.css')}}" rel="stylesheet" type="text/css">
    <style>

    </style>
</head>
<body>
<header>
    @guest
        <div class="headerLinks">
            <a href="{{ route('login') }}">{{ __('Login') }}</a>
            <a href="{{ route('register') }}">{{ __('Register') }}</a>
        </div>
    @else
        <div class="headerLinks">
        <p>{{ Auth::user()->name }}</p>
        <a class="" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    @endguest
</header>
<div class="content">
    @yield('content')
</div>
<script src="{{ URL::asset('js/jquery.js')}}"></script>
<script src="{{ URL::asset('js/index.js')}}"></script>
</body>
</html>
