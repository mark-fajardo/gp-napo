@extends('layouts.front')

@section('styles')
    <style>
        .slide-2 {
            z-index: 6;
            min-width: 1000px;
            max-width: 1000px;
            white-space: normal;
            font-size: 70px;
            line-height: 40px;
            font-weight: 700;
            color: #ffffff;
            letter-spacing: 0px;
            font-family:Roboto;
            margin-top: -150px
        }

        @media (min-width: 576px) {
            .slide-2 {
                min-width: 400px;
                max-width: 400px;
                white-space: normal;
                font-size: 30px;
                line-height: 30px;
                font-weight: 700;
                color: #ffffff;
                letter-spacing: 0px;
                font-family:Roboto;
                margin-top: -150px
            }
        }

        @media (min-width: 768px) {

        }

        @media (min-width: 992px) {

        }

        @media (min-width: 1200px) {

        }

        @media (max-width: 576px) { 
           
        }
    </style>
@endsection

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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <script>
        function stickNavBar(windowPos, navbarPos) {
            const elNav = $('#navigation');
            const marginIn = '-' + (navbarPos + 35) + 'px';
            const marginOut = '-' + (navbarPos - 109) + 'px';

            if (windowPos > navbarPos) {
                elNav.removeClass('absolute');
                elNav.addClass('fixed');
                elNav.css('margin-top', marginIn);
            } else if (windowPos < navbarPos) {
                elNav.removeClass('fixed');
                elNav.addClass('absolute');
                elNav.css('margin-top', marginOut);
            }

        }

        $(function() {
            $(window).scroll(() => {
                const windowPos = $(window).scrollTop();
                const navbarPos = $('#navigation-anchor').offset().top;
                stickNavBar(windowPos, navbarPos)
            });

            $('.testimonial_owlCarousel').owlCarousel({
                loop:true,
                margin:10,
                dots:false,
                nav:true,
                autoplay:false,
                smartSpeed: 1000,
                autoplayTimeout:4000,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            })
        });
    </script>
@endsection
