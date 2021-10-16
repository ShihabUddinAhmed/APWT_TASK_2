<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('title')</title>
    </head>
    
    <body>
        @include('includes.navbar')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>