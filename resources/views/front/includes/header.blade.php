<style>
    .remove-after:after{content:none!important}.li-more{color:#000!important;font-weight:700;border-bottom:2px solid #ffc246}.li-more:hover{color:#ffc246!important}.header-title:hover{color:#ffc246}
</style>
<div class="header-area header-sticky header-sticky--default">
    <div class="header-area__desktop header-area__desktop--default">
        <!--=======  header top bar  =======-->
        <div class="header-top-bar header-top-bar--white" style="padding-top: .75rem !important; padding-bottom: .75rem !important;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <!-- top bar left -->
                        <div class="top-bar-left-wrapper">
                            <ul class="topbar-menu">
                                <li><i class="ion-ios-location"></i> &nbsp; 688-A1 Road 1, Matandang Balara, Commonwealth Avenue, Quezon City, PH</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- top bar right -->
                        <div class="top-bar-right-wrapper">
                            <div class="social-links social-links--white-topbar d-inline-block">
                                <ul>
                                    <li><a href="//facebook.com"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="//twitter.com"><i class="ion-social-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=======  End of header top bar  =======-->
        <!--=======  header info area  =======-->
        <div class="header-info-area border-bottom" style="padding: 20px 0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="header-info-wrapper align-items-center">
                            <!-- logo -->
                            <div class="logo">
                                <a href="{{ route('front.index') }}">
                                    <img src="{{ asset('assets/img/logo/Logodark_NAPO.png') }}" class="img-fluid" alt="">
                                </a>
                            </div>

                            <!-- header contact info -->
                            <div class="header-contact-info">
                                <div class="swiper-container header-info-slider">
                                    <div class="swiper-wrapper header-info-slider-wrapper">
                                        <div class="swiper-slide">
                                            <div class="header-info-single-item">
                                                <div class="header-info-single-item__icon">
                                                    <i class="ion-ios-location-outline"></i>
                                                </div>
                                                <div class="header-info-single-item__content">
                                                    <h6 class="header-info-single-item__title">688-A1 Road 1, Old Balara</h6>
                                                    <p class="header-info-single-item__subtitle">Commonwealth Avenue, QC</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="header-info-single-item">
                                                <div class="header-info-single-item__icon">
                                                    <i class="ion-ios-telephone-outline"></i>
                                                </div>
                                                <div class="header-info-single-item__content">
                                                    <h6 class="header-info-single-item__title">+63 956-498-7838</h6>
                                                    <p class="header-info-single-item__subtitle">Contact Sales</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="header-info-single-item">
                                                <div class="header-info-single-item__icon">
                                                    <i class="ion-ios-clock-outline"></i>
                                                </div>
                                                <div class="header-info-single-item__content">
                                                    <h6 class="header-info-single-item__title">08:00 AM - 06:00 PM</h6>
                                                    <p class="header-info-single-item__subtitle">Monday - Friday</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- mobile menu -->
                            <div class="mobile-navigation-icon" id="mobile-menu-trigger">
                                <i></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=======  End of header info area =======-->
        <!--=======  header navigation area  =======-->
        <div class="header-navigation-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- header navigation -->
                        <div class="header-navigation header-navigation--header-default position-relative">
                            <div class="header-navigation__nav position-static">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="{{ route('front.index') }}">HOME</a>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">EQUIPMENTS</a>
                                            <ul class="megamenu megamenu--mega">
                                                @foreach ($categories as $category)
                                                    <li>
                                                        <h2 class="page-list-title">
                                                            <a href="{{ route('front.category', ['slug' => $category->slug]) }}" class="header-title">{{ $category->name }}</a>
                                                        </h2>
                                                        <ul>
                                                            @foreach ($category->items->slice(0,5) as $item)
                                                                <li><a href="{{route('front.item', ['slug' => $item->slug])}}">{{ $item->item_name }}</a></li>
                                                            @endforeach
                                                            <li class="remove-after">
                                                                <a href="{{ route('front.category', ['slug' => $category->slug]) }}" class="li-more">More Equipments</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.about') }}">ABOUT</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.contact') }}">CONTACT US</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.quote') }}" class="ht-btn ht-btn--default d-inline-block" style="height: 100% !important;">GET A QUOTE</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                            <div class="header-navigation__icon">
                                <div class="header-navigation__icon__search">
                                    <a href="javascript:void(0)" id="search-overlay-trigger"> <i class="ion-ios-search-strong"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=======  End of header navigation area =======-->
    </div>
</div>