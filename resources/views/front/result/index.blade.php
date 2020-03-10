@extends('layouts.front')

@section('styles')
    <style>
    .single-img-wrapper:hover {
        opacity: .5 !important;
    }
    .tilted {
        -webkit-transition: all 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
        -o-transition: all 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
        transition: all 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
        -webkit-transform: translateY(5px);
        -ms-transform: translateY(5px);
        transform: translateY(5px);
    }
    .tilted > shop-single-product img {
        display: block;
        -webkit-transition: all 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
        -o-transition: all 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
        transition: all 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
        -webkit-box-shadow: 0 20px 40px rgba(0, 0, 0, 0.16);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.16);
        z-index: 1
    }
    .cat-item-img {
        -webkit-box-shadow: 0 20px 40px rgba(0, 0, 0, 0.16);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.16);
    }
    .tilted:hover {
        -webkit-transform: translateY(-4px) !important;
        -ms-transform: translateY(-4px) !important;
        transform: translateY(-4px) !important;
    }
    
    .front-text {
        border-left:#ffc246 solid 3px;
        align-items: flex-start !important;
        -webkit-align-items: flex-start !important;
    }
    </style>
@endsection

@section('content')

    @include('front.result.header')
   
    @if ($results->count() > 0)
        @include('front.result.items')
    @endif


@endsection

@section('scripts')
@endsection