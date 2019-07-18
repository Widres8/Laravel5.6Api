<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SysLey</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-md-4 mt-5 mb-3 text-center">
                    <img class="img-fluid" src="{{ asset('images/sysley.png') }}" alt="">
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col text-center">
                    @if ($status)
                        <h1 class="text-success">{{ $message }}</h1>
                    @else
                        <h1 class="text-danger">{{ $message }}</h1>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
