<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">
    @include('front.includes.styles')
    @yield('styles')

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162020410-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-162020410-1');
    </script>
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