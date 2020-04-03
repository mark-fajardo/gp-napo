@extends('layouts.front')

@section('meta')
<meta property="og:image" content="{{ asset('assets/img/logo/lightlogo1.png') }}" />
    <meta property="og:site_name" content="GP NAPO Branded Bull Equipment"/>
    <meta property="og:description" content="{{ $category->description }}"/>
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="{{ $category->name }} | GP NAPO Branded Bull Equipment"/>
    <meta name="title" content="{{ $category->name }} | GP NAPO Branded Bull Equipment"/>
    <meta name="keywords" content="food equipment, GP NAPO Branded Bull Equipment, {{ $category->name }}">
    <meta name="description" content="{{ $category->description }}"/>
    <title>{{ $category->name }} | GP NAPO Branded Bull Equipment</title>
@endsection

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
    .page-link {
        color: #F6A623
    }
    .page-link:hover {
        color: #F6A623
    }
    .page-item.active .page-link {
        background-color: #F6A623 !important;
        border-color: #F6A623 !important;
    }
    </style>
@endsection

@section('content')

    @include('front.category.header')
    <?php $ctr = 0; ?>
    @foreach ($category->items as $item)
        @if ($item->is_featured == 1)
        <?php $ctr++ ?>
        @endif
    @endforeach
    @if ($ctr > 0)
    @include('front.category.front',  ['featuredCount' => $ctr])
    @endif
    @include('front.category.items', ['featuredCount' => $ctr])

@endsection

@section('scripts')
@if ($ctr > 0)
<script>
    var featureProjectTwoSlider = new Swiper('.featured-project-two-slider-container', {
        slidesPerView : {{ $ctr >= 3 ? 3 : $ctr }},
        loop: true,
        speed: 1000,
        watchSlidesVisibility: true,
        navigation: {
            nextEl: '.ht-swiper-button-next-1',
            prevEl: '.ht-swiper-button-prev-1'
        },
        breakpoints: {
            991:{
                slidesPerView : {{ $ctr >= 2 ? 2 : 1 }}
            },

            767:{
                slidesPerView : {{ $ctr >= 2 ? 2 : 1 }}

            },

            575:{
                slidesPerView : 1,
                spaceBetween : 30
            }
        }
    });
</script>
@endif
@endsection
