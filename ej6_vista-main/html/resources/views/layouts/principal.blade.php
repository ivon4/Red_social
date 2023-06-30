<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @vite('resources/css/app.css')
    
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Space+Mono&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16"  href="{{ asset('images/favicon-16x16.png') }}">
    @yield('styles')
    <title>{{ $pageTitle ?? config('app.name') }}</title>
    <style>
        .font-indieflower{
            font-family: 'Indie Flower', cursive;
        }
    </style>
</head>
<body>

<div class="container mx-auto">
    <div class="flex">
        @include('partials._left-menu')

        @yield('main')

        @include('partials._right-menu')
    </div>
</div>
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
@yield('scripts')
</body>
</html>
