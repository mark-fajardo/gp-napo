@extends('layouts.front')

@section('styles')
    .single-img-wrapper {
        opacity: .5 !important;
    }
@endsection

@section('content')

    @include('front.category.header')
    @include('front.category.items')


@endsection

@section('scripts')
@endsection
