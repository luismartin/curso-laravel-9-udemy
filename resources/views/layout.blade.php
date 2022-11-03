<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Inicio')</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/contacto">Contacto</a></li>
                <li><a href="/tienda">Tienda Virtual</a></li>
            </ul>
        </nav>
        <hr>
        <h1 class="text-4xl font-extrabold">@yield('titulo', 'Inicio')</h1>
        @yield('content')
    </body>
</html>
