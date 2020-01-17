@extends('layouts.front')

@section('styles')
    
@endsection

@section('content')

    @include('front.item.header')

    <div class="page-content-wrapper section-space--inner--120">
        @include('front.item.details')
        @include('front.item.tabs')
    </div>

@endsection

@section('scripts')
@endsection
