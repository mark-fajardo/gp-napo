@extends('layouts.front')

@section('meta')
<meta property="og:image" content="{{ asset('assets/img/logo/lightlogo1.png') }}" />
    <meta property="og:site_name" content="GP NAPO Branded Bull Equipment"/>
    <meta property="og:description" content="Branded and imported food equipments for Meat processing, Restaurant, Bakery, Hotel Kitchen and Industrial factories."/>
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Contact Us | GP NAPO Branded Bull Equipment"/>
    <meta name="title" content="Contact Us | GP NAPO Branded Bull Equipment"/>
    <meta name="keywords" content="food equipment">
    <meta name="description" content="Branded and imported food equipments for Meat processing, Restaurant, Bakery, Hotel Kitchen and Industrial factories"/>
    <title>Contact Us | GP NAPO Branded Bull Equipment</title>
@endsection

@section('content')

    @include('front.contact.maps')
    @include('front.contact.info')
    @include('front.contact.quote')

@endsection

