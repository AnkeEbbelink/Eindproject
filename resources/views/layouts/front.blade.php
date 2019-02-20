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
        <div class="flex-center position-ref full-height">
           
            <div class="content">
               
                <div class="title m-b-md">
                    Dierenopvang Hengelo
                </div>

                 <div class="links">
                    <a href="https://www.dierenbescherming.nl/">dierenbescherming</a>
                    <a href="https://ikzoekbaas.dierenbescherming.nl/">ikzoekbaas</a>
                    <a href="https://">Partners</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
                    @if (Route::has('login'))
                    
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>
    
                          
                        @endauth
                   
                    @endif
                 </body>
                </html>