@extends('layouts.front')

@section('meta')
<meta property="og:image" content="{{ asset('assets/img/logo/lightlogo1.png') }}" />
    <meta property="og:site_name" content="GP NAPO Branded Bull Equipment"/>
    <meta property="og:description" content="Branded and imported food equipments for Meat processing, Restaurant, Bakery, Hotel Kitchen and Industrial factories."/>
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Get a Quote | GP NAPO Branded Bull Equipment"/>
    <meta name="title" content="Get a Quote | GP NAPO Branded Bull Equipment"/>
    <meta name="keywords" content="food equipment">
    <meta name="description" content="Branded and imported food equipments for Meat processing, Restaurant, Bakery, Hotel Kitchen and Industrial factories"/>
    <title>Get a Quote | GP NAPO Branded Bull Equipment</title>
@endsection

@section('styles')
    <style>
        .error {
            margin-top: -18px;
            color: #DC3545;
            font-weight: 400;
            font-size: 14px
        }
    </style>
@endsection

@section('content')

    @include('front.quote.form')

@endsection

@section('scripts')
<script>
    @if(Session::has('success'))
        alert("{{ Session::get('success') }}")
    @endif
</script>
@endsection
