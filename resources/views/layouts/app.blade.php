<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel">
            <div class="container">
                
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name','Dierenopvang Hengelo') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
                <section id="main"> 
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action bg-dark text-muted">Menu </a>
                                        <a href="http://eindproject.test/cats" class="list-group-item list-group-item-action" >Bezetting</a>
                                        <a href="http://eindproject.test/create" class="list-group-item list-group-item-action">Toevoegen</a>
                                        <a href="#" class="list-group-item list-group-item-action">Pension</a>
                                        <a href="#" class="list-group-item list-group-item-action">Pleeggezin</a>
                                        <a href="#" class="list-group-item list-group-item-action">Winkel</a>
                                        
                                    </div>
                                </div>
                                <div class="col-md-9">
                                </div>
                            </div>
                        </div>
                    </section>
            @yield('content')
        </main>
    </div>
</body>
<div id="footer ">
    <div class="container col-md-12 bg-dark">
        <br>
      <p class="text-muted">This Bootstrap Example courtesy <a href="http://www.bootply.com">Bootply.com</a></p>
    <br>
    </div>
</div>
</html>
