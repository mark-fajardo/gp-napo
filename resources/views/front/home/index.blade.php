@extends('layouts.front')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/plugins/sequencejs/sequence-theme.modern-slide-in.css') }}">
@endsection

@section('content')

    @include('front.home.slider')


@endsection

@section('scripts')
<script src="{{ asset('js/plugins/sequencejs/hammer.min.js') }}"></script>
<script src="{{ asset('js/plugins/sequencejs/sequence.min.js') }}"></script>
<script src="{{ asset('js/plugins/sequencejs/sequence-theme.modern-slide-in.js') }}"></script>
@endsection
