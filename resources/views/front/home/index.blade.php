@extends('layouts.front')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/plugins/sequencejs/sequence-theme.modern-slide-in.css') }}">
@endsection

@section('content')

    @include('front.home.slider')
    @include('front.home.first-section')

@endsection

@section('scripts')
    <script src="{{ asset('js/plugins/sequencejs/hammer.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sequencejs/sequence.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sequencejs/sequence-theme.modern-slide-in.js') }}"></script>
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script>
        function stickNavBar(windowPos, navbarPos) {
            const marginIn = '-' + (navbarPos + 35) + 'px';
            const marginOut = '-' + (navbarPos - 109) + 'px';
            const elNav = $('#navigation');

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
        });
    </script>
@endsection
