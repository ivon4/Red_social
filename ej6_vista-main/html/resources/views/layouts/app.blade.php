<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $pageTitle ?? config('app.name') }}</title>
    <link rel="icono" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">  --}}
    @vite('resources/css/app.css')

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>

    
        @yield('content')
   

</body>

</html>
