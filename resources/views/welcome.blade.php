<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body id="fondo">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md stroke">
                    {{ Session::get('llave') }}
                </div>

                <div class="links">
                  <a class="shake" href="link">Probar</a>
                  <a class="shake-slow" href="link">Probar</a>
                  <a class="shake-rotate" href="link">Probar</a>
                  <a class="shake-slow shake-constant shake-constant--hover" href="link">Probar</a>
                </div>

            </div>
        </div>
        <script src="/js/app.js"></script>
        <script>
        $("#fondo").quietflow({
          theme : "cornerSpikes",
          backgroundCol : "#34495E",
          specificColors : [
            "#009245",
            "#FCEE21"
          ]
        })
        </script>
        @if (session()->has('llave'))
          <script>toastr.error("{{ Session::get('llave') }}");</script>
        @endif
    </body>
</html>
