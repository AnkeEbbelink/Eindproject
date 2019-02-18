<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dierenopvang</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Gruppo" rel="stylesheet"> 
        <!-- Styles -->

          
        
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
                 </div>
            </div>
        </div>
    </body>
</html>
