<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GP NAPO</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
    @include('front.includes.styles')
    @yield('styles')
</head>

<body>

    @include('front.includes.preloader')

    @include('front.includes.header')

    @yield('content')

    @include('front.includes.footer')

    @include('front.includes.mobile-header')

    @include('front.includes.search')

    @include('front.includes.scroll-top')

    @include('front.includes.scripts')

    @yield('scripts')

</body>

</html>