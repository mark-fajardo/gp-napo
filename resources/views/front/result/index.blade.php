@extends('layouts.front')

@section('meta')
<meta property="og:image" content="{{ asset('assets/img/logo/lightlogo1.png') }}" />
    <meta property="og:site_name" content="GP NAPO Branded Bull Equipment"/>
    <meta property="og:description" content="Branded and imported food equipments for Meat processing, Restaurant, Bakery, Hotel Kitchen and Industrial factories"/>
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Search results for: {{ Request::get('q') }} | GP NAPO Branded Bull Equipment"/>
    <meta name="title" content="Search results for: {{ Request::get('q') }} | GP NAPO Branded Bull Equipment"/>
    <meta name="keywords" content="food equipment">
    <meta name="description" content="Branded and imported food equipments for Meat processing, Restaurant, Bakery, Hotel Kitchen and Industrial factories"/>
    <title>Search results for: {{ Request::get('q') }} | GP NAPO Branded Bull Equipment</title>
@endsection

@section('styles')
    <style>
    .single-img-wrapper:hover {
        opacity: .5 !important;
    }
    .tilted {
        -webkit-transition: all 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
        -o-transition: all 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
        transition: all 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
        -webkit-transform: translateY(5px);
        -ms-transform: translateY(5px);
        transform: translateY(5px);
    }
    .tilted > shop-single-product img {
        display: block;
        -webkit-transition: all 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
        -o-transition: all 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
        transition: all 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
        -webkit-box-shadow: 0 20px 40px rgba(0, 0, 0, 0.16);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.16);
        z-index: 1
    }
    .cat-item-img {
        -webkit-box-shadow: 0 20px 40px rgba(0, 0, 0, 0.16);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.16);
    }
    .tilted:hover {
        -webkit-transform: translateY(-4px) !important;
        -ms-transform: translateY(-4px) !important;
        transform: translateY(-4px) !important;
    }
    
    .front-text {
        border-left:#ffc246 solid 3px;
        align-items: flex-start !important;
        -webkit-align-items: flex-start !important;
    }
    </style>
@endsection

@section('content')

    @include('front.result.header')
   
    @if ($results->count() > 0)
        @include('front.result.items')
    @endif


@endsection

@section('scripts')
@endsection
