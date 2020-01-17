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
    @include('front.result.items')


@endsection

@section('scripts')
@endsection
