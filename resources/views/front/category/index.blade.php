@extends('layouts.front')

@section('styles')
    <style>
    .single-img-wrapper:hover {
        opacity: .5 !important;
    }
    </style>
@endsection

@section('content')

    @include('front.category.header')
    @include('front.category.items')


@endsection

@section('scripts')
@endsection
