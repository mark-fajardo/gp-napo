@extends('layouts.admin')

@section('styles')

@endsection

@section('content')

    <nav-bar></nav-bar>
    <div class="container-fluid">
        <div class="row">
            <side-bar></side-bar>
            <router-view></router-view>
            <!-- <dashboard></dashboard> -->
        </div>
    </div>

@endsection

@section('scripts')

    <script src="{{ asset('js/app.js') }}"></script>

@endsection
