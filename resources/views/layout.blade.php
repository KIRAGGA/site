<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        @yield('content')
        <ul>
            <li><a href="/about">about</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </body>
</html>