<div class="footer-area section-space--inner--top--120 dark-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-content-wrapper">
                    <div class="row">
                        <div class="col-lg-5 col-md-12">
                            <!-- footer intro wrapper -->
                            <div class="footer-intro-wrapper">
                                <div class="footer-logo">
                                    <a href="#">
                                        <img src="{{ asset('assets/img/logo/darklogo.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="footer-desc">
                                    Branded and imported food equipments for Meat processing, Restaurant, Bakery, Hotel Kitchen and Industrial factories. We offer much cheaper Food Machines (50% to 60% less compared to Brandnew Equiptment) to some of existing food manufacturers, Hotels & Restaurants, Bakeshop, meatshop, meat processors and to any food related businesses.
                                </div>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="//facebook.com" data-tippy="Facebook" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__black" data-tippy-placement="top"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="//twitter.com" data-tippy="Twitter" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__black" data-tippy-placement="top"><i class="ion-social-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <!-- footer widget -->  
                            <div class="footer-widget">
                                <h4 class="footer-widget__title">NAVIGATION</h4>
                                <ul class="footer-widget__navigation">
                                    <li><a href="{{ route('front.index') }}">Home</a></li>
                                    <li><a href="#categories">Equipments</a></li>
                                    <li><a href="{{ route('front.about') }}">About Us</a></li>
                                    <li><a href="{{ route('front.contact') }}">Contact Us</a></li>
                                    <li style="border: 2px solid #FFC246; padding: 15px 25px !important; text-align: center; margin-top: 30px"><a href="{{ route('front.quote') }}" style="color: #FFC246; padding: 0 !important;">GET A QUOTE</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <!-- footer widget -->
                            <div class="footer-widget">
                                <h4 class="footer-widget__title">EQUIPMENTS</h4>
                                <ul class="footer-widget__navigation">
                                @foreach ($categories as $category)
                                    <li><a href="{{ route('front.category', ['slug' => $category->slug]) }}"">{{ $category->name }}</a></li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <!-- footer widget -->
                            <div class="footer-widget">
                                <h4 class="footer-widget__title">CONTACT</h4>
                                <ul class="footer-widget__navigation">
                                    <li>
                                        <p style="color: #fff"><i class="fa fa-map-marker" aria-hidden="true"></i> Address</p>
                                        <p style="line-height: 24px">688-A1 Road 1, Matandang Balara, Commonwealth Avenue, Quezon City, PH</p>
                                    </li>
                                    <li>
                                        <p style="color: #fff"><i class="fa fa-phone" aria-hidden="true"></i> Have any questions?</p>
                                        <p style="line-height: 24px">09178033855 / +639564987838</p>
                                    </li>
                                    <li>
                                        <p style="color: #fff"><i class="fa fa-envelope-o" aria-hidden="true"></i> Got any concerns?</p>
                                        <p style="line-height: 24px">{!! $email !!}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-copyright-wrapper">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-copyright-left">
                                Copyright © 2020 All Rights Reserved by GP NAPO Food Equipment Trading
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>