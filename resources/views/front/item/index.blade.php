@extends('layouts.front')

@section('meta')
<meta property="og:image" content="{{ asset($item->img_dir[0]) }}" />
    <meta property="og:site_name" content="GP NAPO Branded Bull Equipment"/>
    <meta property="og:description" content="{{ $item->item_short_description }}"/>
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="{{ $item->item_name }} | GP NAPO Branded Bull Equipment"/>
    <meta name="title" content="{{ $item->item_name }} | GP NAPO Branded Bull Equipment"/>
    <meta name="keywords" content="food equipment, GP NAPO Branded Bull Equipment, {{ $item->item_brand }}, {{ $item->item_short_description }}">
    <meta name="description" content="{{ $item->item_short_description }}"/>
    <title>{{ $item->item_name }} | GP NAPO Branded Bull Equipment</title>
@endsection

@section('content')

    @include('front.item.header')

    <div class="page-content-wrapper section-space--top--60">
        @include('front.item.details')
        @include('front.item.tabs')
    </div>

@endsection

@section('scripts')
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=357785218249942&autoLogAppEvents=1"></script>
@endsection
