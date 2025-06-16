<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('web.layouts.partials.head')
    </head>

    <body class="font-sans antialiased">
        @yield('content')
    </body>
</html>
