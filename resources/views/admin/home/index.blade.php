@extends('layouts.admin')

@section('styles')
<link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.0/dist/vue-multiselect.min.css">
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
