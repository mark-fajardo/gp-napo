{{-- 
        TODOS:
        1. Fix Footer
        2. Fix equipment megamenu, change it to other design
        3. create about, contact and get quote page
        
    
    
--}}
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GP NAPO</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.png">

    @include('front.includes.styles')

</head>

<body>

@include('front.includes.preloader')

@include('front.includes.header')

@include('front.home.slider')

@include('front.home.categories')

@include('front.home.why-us')

@include('front.home.testimonials')

@include('front.home.support')

@include('front.includes.footer')

@include('front.includes.mobile-header')

@include('front.includes.search')

@include('front.includes.scroll-top')


<!-- JS
============================================ -->

<!-- Modernizer JS -->
<script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

<!-- jQuery JS -->
<script src="assets/js/vendor/jquery-3.4.1.min.js"></script>

<!-- Bootstrap JS -->
<script src="assets/js/vendor/bootstrap.min.js"></script>

<!-- Popper JS -->
<script src="assets/js/vendor/popper.min.js"></script>

<!-- Swiper Slider JS -->
<script src="assets/js/plugins/swiper.min.js"></script>

<!-- Tippy JS -->
<script src="assets/js/plugins/tippy.min.js"></script>

<!-- Light gallery JS -->
<script src="assets/js/plugins/lightgallery.min.js"></script>

<!-- Light gallery video JS -->
<script src="assets/js/plugins/lg-video.min.js"></script>

<!-- Waypoints JS -->
<script src="assets/js/plugins/waypoints.min.js"></script>

<!-- Counter up JS -->
<script src="assets/js/plugins/counterup.min.js"></script>

<!-- Appear JS -->
<script src="assets/js/plugins/appear.min.js"></script>

<!-- Gmap3 JS -->
<script src="assets/js/plugins/gmap3.min.js"></script>

<!-- Isotope JS -->
<script src="assets/js/plugins/isotope.min.js"></script>

<!-- Mailchimp JS -->
<script src="assets/js/plugins/mailchimp-ajax-submit.min.js"></script>

<!-- Plugins JS t(Please remove he comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

<!--
<script src="assets/js/plugins/plugins.min.js"></script>
-->

<!-- Main JS -->
<script src="assets/js/main.js"></script>

<!-- Revolution Slider JS -->
<script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/revolution/revolution-active.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

<!--=====  End of JS files ======-->

</body>

</html>