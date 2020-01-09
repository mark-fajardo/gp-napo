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

<!--====================  End of testimonial brand slider area  ====================-->
<!--====================  project counter area ====================-->

<!--====================  End of project counter area  ====================-->
<!--====================  blog newsletter area ====================-->

<!--====================  End of blog newsletter area  ====================-->
<!--====================  support footer area ====================-->
<div class="support-footer__area">
    <div class="row no-gutters">
        <div class="col-lg-12">
            <!-- google map -->
            <div class="google-map google-map--style-2" id="google-map-one" data-width="100%" data-zoom_enable="" data-zoom="10" data-map_type="roadmap"></div>
        </div>
        <div class="col-md-6">
            <div class="support-footer__single bg-img" data-bg="assets/img/icons/message.png">
                Email: support-gpnapo@gmail.com
            </div>
        </div>
        <div class="col-md-6">
            <div class="support-footer__single support-footer__single--dark bg-img" data-bg="assets/img/icons/support.png">
                Support: (+63)-956-498-7838
            </div>
        </div>
    </div>
</div>
<!--====================  End of support footer area  ====================-->
<!--====================  footer area ====================-->
@include('front.includes.footer')
<!--====================  End of footer area  ====================-->
<!--====================  mobile menu overlay ====================-->
<div class="mobile-menu-overlay" id="mobile-menu-overlay">
    <div class="mobile-menu-overlay__header">
        <div class="container-fluid--cp-60">
            <div class="row align-items-center">
                <div class="col-md-4 col-sm-6 col-9">
                    <!-- logo -->
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/img/logo/logo-dark.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 col-3">
                    <!-- mobile menu content -->
                    <div class="mobile-menu-content">
                        <a class="mobile-navigation-close-icon" id="mobile-menu-close-trigger" href="javascript:void(0)">
                            <i class="ion-ios-close-empty"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu-overlay__body">
        <nav class="offcanvas-navigation">
            <ul>
                <li class="has-children">
                    <a href="#">Home</a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Main Homepage</a></li>
                        <li><a href="index-2.html">Essential 1 Homepage</a></li>
                        <li><a href="index-3.html">Simple Homepage</a></li>
                        <li><a href="index-4.html">Header Left Homepage</a></li>
                        <li><a href="index-5.html">Homepage 11</a></li>
                        <li><a href="index-6.html">Classic Homepage</a></li>
                        <li><a href="index-7.html">Essential 2 Homepage</a></li>
                        <li><a href="index-8.html">Multi Card Homepage</a></li>
                        <li><a href="index-9.html">Modern Homepage</a></li>
                        <li><a href="index-10.html">Bold & Strong Homepage</a></li>
                        <li><a href="index-11.html">Box Homepage</a></li>
                        <li><a href="index-12.html">Home Demo 12</a></li>
                        <li><a href="index-13.html">Home Demo 13</a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li class="has-children">
                            <a href="#">Page list 01</a>
                            <ul class="sub-menu">
                                <li><a href="page-about.html">About 01</a></li>
                                <li><a href="page-about-2.html">About 02</a></li>
                                <li><a href="page-contact.html">Contact Us 01</a></li>
                                <li><a href="page-contact-2.html">Contact Us 02</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Page list 02</a>
                            <ul class="sub-menu">
                                <li><a href="page-history.html">History</a></li>
                                <li><a href="page-leadership.html">Leadership</a></li>
                                <li><a href="page-partner.html">Partners & Clients</a></li>
                                <li><a href="page-faq.html">FAQ's</a></li>
                                <li><a href="page-award.html">Award & Recognition</a></li>
                                <li><a href="page-career.html">Career</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Page list 03</a>
                            <ul class="sub-menu">
                                <li><a href="icon-flat.html">Icon Flat</a></li>
                                <li><a href="icon-tractor.html">Icon Tractor</a></li>
                                <li><a href="icon-icomoon.html">Icon Icomoon</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <a href="javascript:void(0)">Industries</a>
                    <ul class="sub-menu">
                        <li class="has-children">
                            <a href="#">Grid</a>
                            <ul class="sub-menu">
                                <li><a href="industries-grid.html">Industries Grid 1</a></li>
                                <li><a href="industries-grid-2.html">Industries Grid 2</a></li>
                                <li><a href="industries-grid-3.html">Industries Grid 3</a></li>
                                <li><a href="industries-grid-4.html">Industries Grid 4</a></li>
                                <li><a href="industries-grid-5.html">Industries Grid 5</a></li>
                                <li><a href="industries-grid-6.html">Industries Grid 6</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Carousel</a>
                            <ul class="sub-menu">
                                <li><a href="industries-carousel.html">Industries Carousel 1</a></li>
                                <li><a href="industries-carousel-2.html">Industries Carousel 2</a></li>
                                <li><a href="industries-carousel-3.html">Industries Carousel 3</a></li>
                                <li><a href="industries-carousel-4.html">Industries Carousel 4</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <a href="javascript:void(0)">Case Studies</a>
                    <ul class="sub-menu">
                        <li><a href="case-studies-grid-caption.html">Case Studies Grid Caption 01</a></li>
                        <li><a href="case-studies-grid-caption-2.html">Case Studies Grid Caption 02</a></li>
                        <li><a href="case-studies-grid.html">Case Studies Grid</a></li>
                        <li><a href="case-study-single-slider.html">Single Case Study Slider</a></li>
                        <li><a href="case-study-single-gallery.html">Single Case Study Gallery</a></li>
                        <li class="has-children">
                            <a href="#">Submenu Level One</a>
                            <ul class="sub-menu">
                                <li class="has-children">
                                    <a href="#">Submenu Level Two</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Submenu Level Three</a></li>
                                        <li><a href="#">Submenu Level Three</a></li>
                                        <li><a href="#">Submenu Level Three</a></li>
                                        <li><a href="#">Submenu Level Three</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Submenu Level Two</a></li>
                                <li><a href="#">Submenu Level Two</a></li>
                                <li><a href="#">Submenu Level Two</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Submenu Level One</a>
                            <ul class="sub-menu">
                                <li class="has-children">
                                    <a href="#">Submenu Level Two</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Submenu Level Three</a></li>
                                        <li><a href="#">Submenu Level Three</a></li>
                                        <li><a href="#">Submenu Level Three</a></li>
                                        <li><a href="#">Submenu Level Three</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Submenu Level Two</a></li>
                                <li><a href="#">Submenu Level Two</a></li>
                                <li><a href="#">Submenu Level Two</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li class="has-children">
                    <a href="javascript:void(0)">Blog</a>
                    <ul class="sub-menu">
                        <li class="has-children">
                            <a href="#">Blog layouts 01</a>
                            <ul class="sub-menu">
                                <li><a href="blog-list.html">Blog List</a></li>
                                <li><a href="blog-metro.html">Blog Metro</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Blog layouts 02</a>
                            <ul class="sub-menu">
                                <li><a href="blog-grid-classic.html">Blog Grid Classic 1</a></li>
                                <li><a href="blog-grid-classic-2.html">Blog Grid Classic 2</a></li>
                                <li><a href="blog-grid-classic-3.html">Blog Grid Classic 3</a></li>
                                <li><a href="blog-grid-classic-4.html">Blog Grid Classic 4</a></li>
                                <li><a href="blog-grid-classic-5.html">Blog Grid Classic 5</a></li>
                                <li><a href="blog-grid-simple.html">Blog Grid Simple</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Blog layouts 03</a>
                            <ul class="sub-menu">
                                <li><a href="blog-carousel.html">Blog Carousel</a></li>
                                <li><a href="blog-carousel-2.html">Blog Carousel 2</a></li>
                                <li><a href="blog-carousel-3.html">Blog Carousel 3</a></li>
                                <li><a href="blog-carousel-4.html">Blog Carousel 4</a></li>
                                <li><a href="blog-carousel-5.html">Blog Carousel 5</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Single Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog-post-image.html">Image format</a></li>
                                <li><a href="blog-post-gallery.html">Gallery format</a></li>
                                <li><a href="blog-post-video.html">Video format</a></li>
                                <li><a href="blog-post-audio.html">Audio format</a></li>
                                <li><a href="blog-post-link.html">Link format</a></li>
                                <li><a href="blog-post-quote.html">Quote format</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <a href="javascript:void(0)">Shop</a>
                    <ul class="sub-menu">
                        <li><a href="shop.html">Shop Page</a></li>
                        <li><a href="shop-product.html">Single Product</a></li>
                        <li><a href="shop-cart.html">Cart</a></li>
                        <li><a href="shop-wishlist.html">Wishlist</a></li>
                        <li><a href="shop-checkout.html">Checkout</a></li>
                        <li><a href="shop-my-account.html">My Account</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!--====================  End of mobile menu overlay  ====================-->
<!--====================  search overlay ====================-->
<div class="search-overlay" id="search-overlay">
    <a id="popup-search-close" href="#" class="popup-search-close"><i class="ion-ios-close-empty"></i></a>
    <div class="page-popup-search-inner">
        <form action="#">
            <input type="text" class="search-field" id="search-field">
        </form>
        <p class="form-description">Hit enter to search or ESC to close</p>
    </div>
</div>
<!--====================  End of search overlay  ====================-->
<!--====================  scroll top ====================-->
<a href="#" class="scroll-top" id="scroll-top">
    <i class="ion-android-arrow-up"></i>
</a>
<!--====================  End of scroll top  ====================-->
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

<!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

<!--
<script src="assets/js/plugins/plugins.min.js"></script>
-->

<!-- Main JS -->
<script src="assets/js/main.js"></script>


<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD79MY72taVRlZVX2DU6L5PXOh3ezUUKMc&callback=initMap"></script>

<!-- Map JS -->
<script>
    jQuery(document).ready(function($) {

        var gmMapDiv = $("#google-map-one");

        (
            function($) {

                if (gmMapDiv.length) {

                    var gmHeight = gmMapDiv.attr("data-height");
                    var gmWidth = gmMapDiv.attr("data-width");
                    var gmZoomEnable = gmMapDiv.attr("data-zoom_enable");
                    var gmZoom = gmMapDiv.attr("data-zoom");
                    gmMapDiv.width(gmWidth).height(gmHeight);
                    gmMapDiv.gmap3({
                        action: "init",
                        marker: {
                            values: [{
                                address: "40.7590615,-73.969231",
                                data: "<div class=\"gmap-marker-wrap\"><h5 class=\"gmap-marker-title\">New Jersey Office<\/h5><div class=\"gmap-marker-content\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"><\/i> 799-701 Ballantyne Rd<br \/>\nSyracuse, NY 13207<\/div><\/div>",
                                options: {
                                    icon: "",
                                    visible: false,
                                }
                            }],
                            events: {
                                click: function(marker, event, context) {
                                    if (context.data == 0) {
                                        return;
                                    }
                                    var map = $(this).gmap3("get");
                                    infowindow = $(this).gmap3({
                                        get: {
                                            name: "infowindow"
                                        }
                                    });
                                    if (infowindow) {
                                        infowindow.open(map, marker);
                                        infowindow.setContent(context.data);
                                    } else {
                                        $(this).gmap3({
                                            infowindow: {
                                                anchor: marker,
                                                options: {
                                                    content: context.data
                                                }
                                            }
                                        });
                                    }
                                }
                            }

                        },
                        overlay: {
                            values: [{
                                address: "40.7590615,-73.969231",
                                data: "<div class=\"gmap-marker-wrap\"><h5 class=\"gmap-marker-title\">New Jersey Office<\/h5><div class=\"gmap-marker-content\"><i class=\"ion-android-pin\" aria-hidden=\"true\"><\/i> 799-701 Ballantyne Rd<br \/>\nSyracuse, NY 13207<\/div><\/div>",
                                options: {
                                    content: '<div><div class="animated-dot">' +
                                        '<div class="middle-dot"><i class="ion-android-pin"></i></div>' +
                                        '<div class="signal"></div>' +
                                        '<div class="signal2"></div>' + '</div></div>',
                                }
                            }],
                            events: {
                                click: function(overlay, event, context) {
                                    if (context.data == 0) {
                                        return;
                                    }
                                    var map = $(this).gmap3("get");
                                    infowindow = $(this).gmap3({
                                        get: {
                                            name: "infowindow"
                                        }
                                    });
                                    if (infowindow) {
                                        infowindow.open(map, overlay);
                                        infowindow.setContent(context.data);
                                    } else {
                                        $(this).gmap3({
                                            infowindow: {
                                                anchor: overlay,
                                                options: {
                                                    content: context.data
                                                }
                                            }
                                        });
                                    }
                                }
                            }
                        },
                        map: {
                            options: {
                                zoom: parseInt(gmZoom),
                                zoomControl: true,
                                mapTypeId: google.maps.MapTypeId.ROADMAP,
                                mapTypeControl: false,
                                scaleControl: false,
                                scrollwheel: gmZoomEnable == 'enable' ? true : false,
                                streetViewControl: false,
                                draggable: true,
                                styles: [{
                                    "featureType": "landscape.man_made",
                                    "elementType": "geometry",
                                    "stylers": [{
                                        "color": "#f7f1df"
                                    }]
                                },
                                    {
                                        "featureType": "landscape.natural",
                                        "elementType": "geometry",
                                        "stylers": [{
                                            "color": "#d0e3b4"
                                        }]
                                    },
                                    {
                                        "featureType": "landscape.natural.terrain",
                                        "elementType": "geometry",
                                        "stylers": [{
                                            "visibility": "off"
                                        }]
                                    },
                                    {
                                        "featureType": "poi",
                                        "elementType": "labels",
                                        "stylers": [{
                                            "visibility": "off"
                                        }]
                                    },
                                    {
                                        "featureType": "poi.business",
                                        "elementType": "all",
                                        "stylers": [{
                                            "visibility": "off"
                                        }]
                                    },
                                    {
                                        "featureType": "poi.medical",
                                        "elementType": "geometry",
                                        "stylers": [{
                                            "color": "#fbd3da"
                                        }]
                                    },
                                    {
                                        "featureType": "poi.park",
                                        "elementType": "geometry",
                                        "stylers": [{
                                            "color": "#bde6ab"
                                        }]
                                    },
                                    {
                                        "featureType": "road",
                                        "elementType": "geometry.stroke",
                                        "stylers": [{
                                            "visibility": "off"
                                        }]
                                    },
                                    {
                                        "featureType": "road",
                                        "elementType": "labels",
                                        "stylers": [{
                                            "visibility": "off"
                                        }]
                                    },
                                    {
                                        "featureType": "road.highway",
                                        "elementType": "geometry.fill",
                                        "stylers": [{
                                            "color": "#ffe15f"
                                        }]
                                    },
                                    {
                                        "featureType": "road.highway",
                                        "elementType": "geometry.stroke",
                                        "stylers": [{
                                            "color": "#efd151"
                                        }]
                                    },
                                    {
                                        "featureType": "road.arterial",
                                        "elementType": "geometry.fill",
                                        "stylers": [{
                                            "color": "#ffffff"
                                        }]
                                    },
                                    {
                                        "featureType": "road.local",
                                        "elementType": "geometry.fill",
                                        "stylers": [{
                                            "color": "black"
                                        }]
                                    },
                                    {
                                        "featureType": "transit.station.airport",
                                        "elementType": "geometry.fill",
                                        "stylers": [{
                                            "color": "#cfb2db"
                                        }]
                                    },
                                    {
                                        "featureType": "water",
                                        "elementType": "geometry",
                                        "stylers": [{
                                            "color": "#a2daf2"
                                        }]
                                    }
                                ]


                            }
                        }
                    });
                }
            }
        )(jQuery);
    });
</script>


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