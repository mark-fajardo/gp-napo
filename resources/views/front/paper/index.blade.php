@extends('layouts.front')

@section('meta')
<meta property="og:image" content="{{ asset('assets/img/printer/2.jpg') }}" />
    <meta property="og:site_name" content="GP NAPO Branded Bull Equipment"/>
    <meta property="og:description" content="Can accomodate job printing of Bills from Central Bank & Printing of Books from DECS."/>
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Hantscho Paper and Book Printers | GP NAPO Branded Bull Equipment"/>
    <meta name="title" content="Hantscho Paper and Book Printers | GP NAPO Branded Bull Equipment"/>
    <meta name="keywords" content="food equipment, Hantscho, paper printer, money printer, magazine printer.">
    <meta name="description" content="Can accomodate job printing of Bills from Central Bank & Printing of Books from DECS."/>
    <title>Hantscho Paper and Book Printers | GP NAPO Branded Bull Equipment</title>
@endsection

@section('content')
<div class="page-content-wrapper section-space--inner--60" style="background: #f7f7f7">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 m-auto">
                <div class="service-details-page-content">
                    <div class="service-details-text-wrapper section-space--bottom--40" style="border-bottom: 1px solid #ddd">
                        <h1 class="big-title">Hantscho Paper and Book Printers</h1>
                    </div>
                    <div class="service-details-split-text section-space--bottom--60">
                        <div class="row">
                            <div class="col-md-12 text-justify">
                                <p>Can accomodate job printing of Bills from Central Bank & Printing of Books from DECS. The machine is dismantled already, available if Quezon City, Philippines. <strong>5 years used in the philippines but never used commercially.</strong></p>
                            </div>
                            <div class="col-md-12">
                                <ul class="service-details-tab__list section-space--top--30">
                                    <li>Brand: Hantscho</li>
                                    <li>Made in Germany</li>
                                    <li>Capacity: 40, 830 booklets per hour 4/6 colors.</li>
                                    <li>Can print Money, Books and Magazines</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="service-details-image-block section-space--bottom--60">
                        <div class="single-list-blog-post__media section-space--bottom--50">
                            <div class="video">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/jr01G4EOfEY?feature=oembed" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="single-service-gallery-wrapper section-space--bottom--60">
                        <div class="case-study__image-gallery-wrapper">
                            <div class="row image-popup">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="case-study__single-gallery-image">
                                        <a href="{{ asset('assets/img/printer/1.jpg') }}" class="single-gallery-thumb">
                                            <img src="{{ asset('assets/img/printer/1.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="case-study__single-gallery-image">
                                        <a href="{{ asset('assets/img/printer/2.jpg') }}" class="single-gallery-thumb">
                                            <img src="{{ asset('assets/img/printer/2.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="case-study__single-gallery-image">
                                        <a href="{{ asset('assets/img/printer/3.jpg') }}" class="single-gallery-thumb">
                                            <img src="{{ asset('assets/img/printer/3.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="case-study__single-gallery-image">
                                        <a href="{{ asset('assets/img/printer/4.jpg') }}" class="single-gallery-thumb">
                                            <img src="{{ asset('assets/img/printer/4.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="case-study__single-gallery-image">
                                        <a href="{{ asset('assets/img/printer/5.jpg') }}" class="single-gallery-thumb">
                                            <img src="{{ asset('assets/img/printer/5.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="case-study__single-gallery-image">
                                        <a href="{{ asset('assets/img/printer/6.jpg') }}" class="single-gallery-thumb">
                                            <img src="{{ asset('assets/img/printer/6.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-details-split-text section-space--bottom--60">
                        <div class="row">
                            <div class="col-md-12 text-justify">
                                <p>It’s formerly used by a religious group from America and it was sent In the Philippines to supplies magazines- booklets for jehovas witness in ASIA and partly doing Books for Iglesia for 3 years. And now the factory and the entire compound in Quezon City more or less 2 hectares purchased by the DMCI Consunji big Construction Company/Developer for high rise buildings , that why the Chairman decided to sold it out here.</p>
                                <p>Our company joined the bidding and luckily we won. The brand new price of the same model and specs of the machines <strong>is more or less ₱450 Million</strong>, and the americans decalared value of this upon entering the pier if around <strong>₱130 Million.</strong> But we are selling this for only <strong>₱58 Million</strong>, and less <strong>30% off</strong> for the sure buyer.</p>
                                <p>For more details contact us by clicking the button below.</p>
                            </div>
                            <div class="col-lg-9 mx-auto text-center mt-5">
                                <a href="{{ route('front.contact') }}" class="ht-btn ht-btn--default d-inline-block" style="height: 100% !important; padding: 15px 40px !important; font-size: 1rem">Contact US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

