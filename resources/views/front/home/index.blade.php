@extends('layouts.front')

@section('content')

    @include('front.home.slider')
    @include('front.home.categories')
    @include('front.includes.quote')
    @include('front.home.why-us')
    @include('front.home.leaders')
    @include('front.includes.clients')
    {{-- @include('front.home.testimonials') --}}
    @include('front.home.support')

@endsection

@section('scripts')
    <script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/revolution/revolution-active.js"></script>
    <script src="{{ asset('js/plugins/sequencejs/hammer.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sequencejs/sequence.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sequencejs/sequence-theme.modern-slide-in.js') }}"></script>
@endsection
