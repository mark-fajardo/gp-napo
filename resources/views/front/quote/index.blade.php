@extends('layouts.front')

@section('styles')
    <style>
        .error {
            margin-top: -18px;
            color: #DC3545;
            font-weight: 400;
            font-size: 14px
        }
    </style>
@endsection

@section('content')

    @include('front.quote.form')

@endsection

@section('scripts')
<script>
    @if(Session::has('success'))
        alert("{{ Session::get('success') }}")
    @endif
</script>
@endsection
