<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="icon" href="{{ Vite::asset('resources/img/dc-logo.png')}}" type="images/png"> --}}
    <title>Document</title>
    {{-- Importazione Vite e Sass --}}
    @vite('resources/js/app.js')
    {{--CDNS--}}
    @yield('cdns')
</head>
<body>
    {{--Header--}}
    @include('includes.header')

    <main>
        {{--Main content--}}
        @yield('main-content')
    </main>

    {{--Footer--}}
    @include('includes.footer')
    
</body>
</html>