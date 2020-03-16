@extends('layouts.front')

@section('meta')
<meta property="og:image" content="{{ asset('assets/img/logo/lightlogo1.png') }}" />
    <meta property="og:site_name" content="GP NAPO Branded Bull Equipment"/>
    <meta property="og:description" content="Branded and imported food equipments for Meat processing, Restaurant, Bakery, Hotel Kitchen and Industrial factories."/>
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="GP NAPO Branded Bull Equipment"/>
    <meta name="title" content="GP NAPO Branded Bull Equipment"/>
    <meta name="keywords" content="food equipment, machine, branded food equipment, refurbish food equipment, secondhand food equipment, mixer, oven, meat processing, restaurant, baking, bakeshop, industrial, commercial, hotel, grinder, freezer">
    <meta name="description" content="Branded and imported food equipments for Meat processing, Restaurant, Bakery, Hotel Kitchen and Industrial factories"/>
    <title>GP NAPO Branded Bull Equipment</title>
@endsection

@section('content')

    @include('front.home.slider')
    @include('front.home.categories')
    @include('front.includes.quote')
    @include('front.home.why-us')
    @include('front.home.leaders')
    @include('front.includes.clients')
    {{-- @include('front.home.testimonials') --}}
    @include('front.home.support')

@endsection

@section('scripts')
    <script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/revolution/revolution-active.js"></script>
    <script src="{{ asset('js/plugins/sequencejs/hammer.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sequencejs/sequence.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sequencejs/sequence-theme.modern-slide-in.js') }}"></script>
@endsection
