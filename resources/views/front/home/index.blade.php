@extends('layouts.front')

@section('styles')

@endsection

@section('content')

    @include('front.home.slider')
    @include('front.home.categories')
    @include('front.includes.quote')
    @include('front.home.why-us')
    @include('front.home.testimonials')
    @include('front.home.support')

@endsection

@section('scripts')
    <script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/revolution/revolution-active.js"></script>
@endsection
