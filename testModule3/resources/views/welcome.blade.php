<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">




    </head>
    <body class="antialiased">
Welcome my page
<a href="{{route('home')}}">Home</a>
<a href="{{url('/list')}}">List</a>
    </body>
</html>
