<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700&display=swap" rel="stylesheet">
    @yield('styles')
    <title>GPNAPO</title>
</head>
<body>
    @include('front.includes.navbar')

    @yield('content')

    @include('front.includes.footer')

    @yield('scripts')
</body>
</html>