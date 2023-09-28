<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SantaFe</title>
        <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon"/>
        <!-- Styles -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class="english">
        @include('components.header')
        <div id="content-container">
            @yield('content')
        </div>
        @include('components.footer')
    </body>
</html>