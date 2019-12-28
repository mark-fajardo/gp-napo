@extends('layouts.admin')

@section('styles')

    <style>
        .green-font {
            color: #000000;
        }

        .green-font:hover {
            color: #38C172;
        }
    </style>

@endsection

@section('content')

    <nav-bar></nav-bar>
    <div class="container-fluid">
        <div class="row">
            <side-bar></side-bar>
            <router-view></router-view>
        </div>
    </div>

@endsection

@section('scripts')

    <script src="{{ asset('js/app.js') }}"></script>

@endsection
