@extends('layouts.front')

@section('styles')
    
@endsection

@section('content')

    @include('front.item.header')

    <div class="page-content-wrapper section-space--top--60">
        @include('front.item.details')
        @include('front.item.tabs')
    </div>

@endsection

@section('scripts')
@endsection
