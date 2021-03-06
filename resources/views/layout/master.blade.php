<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
        <title>@yield('title')</title>
        @yield('csss')
    </head>
    <body>
        @yield('content')
        
        <script src="{{ elixir('js/app.js') }}"></script>
        @yield('script')
    </body>
</html>