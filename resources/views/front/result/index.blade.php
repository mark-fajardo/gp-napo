@extends('layouts.front')

@section('styles')
    <style>
    .single-img-wrapper:hover {
        opacity: .5 !important;
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
