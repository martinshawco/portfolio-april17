<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>
            window.Laravel ={
                csrfToken: {!! json_encode(['csrfToken' => csrf_token()]); !!}
            };
        </script>

        <title>Martin Shaw | Software Engineer &amp; Web Developer</title>

        @section('resources')
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
        @show

    </head>
    <body>

        <div id="app">
            @yield('content')
        </div>

    </body>
</html>
