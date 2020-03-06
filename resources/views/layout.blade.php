<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">about</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
        <div class= "container">
            @yield('content')
            
        </div>

    </body>
</html>