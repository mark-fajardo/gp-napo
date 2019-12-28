@extends('layouts.front')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/plugins/sequencejs/sequence-theme.modern-slide-in.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
@endsection

@section('content')

    @include('front.home.slider')
    @include('front.home.first-section')
    @include('front.home.testimonials')
    @include('front.home.client')

@endsection

@section('scripts')

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
