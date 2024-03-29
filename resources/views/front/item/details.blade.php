<div class="product-details-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-details">
                    <div class="row row-35">
                        <div class="col-lg-6">
                            <div class="product-details__image-slider">
                                <div class="swiper-container product-details__image-slider-container" style="display: flex; align-items: center">
                                    <div class="swiper-wrapper product-details__image-slider-wrapper d-flex align-items-center">
                                        @foreach ($item->img_dir as $img)
                                            <div class="swiper-slide">
                                                <div class="product-details__image-single">
                                                    <img src="{{ asset($img) }}" class="img-fluid item-mm--image" alt="">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="swiper-pagination swiper-pagination-15"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details__content">
                                <h2 class="product-details__title">{{ $item->item_name }}</h2>
                                <div class="product-details__desc section-space--bottom--30">
                                    <p>{{ $item->item_short_description }}</p>
                                </div>
                                </div>
                                <div class="product-details__actions">
                                    <a href="{{ route('front.quote') }}" class="add-cart-btn">GET A QUOTE</a>
                                    {{-- <a href="javascript:void(0)" class="wishlist" data-tippy="Add to wishlist" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__black" data-tippy-placement="top"><i class="ion-android-favorite"></i></a> --}}
                                    {{-- <a href="javascript:void(0)" class="compare" data-tippy="Compare" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__black" data-tippy-placement="top"><i class="ion-ios-shuffle-strong"></i></a> --}}
                                </div>
                                <div class="product-details__meta-wrap">
                                    <div class="single-meta">
                                        <h4 class="title">Brand: </h4>
                                        <span class="sku">{{ $item->item_brand }}</span>
                                    </div>
                                    <div class="single-meta">
                                        <h4 class="title">Categories: </h4>
                                        <div class="single-list-blog-post__content">
                                            <ul class="tag-list">
                                                @foreach ($item->categories as $cat)
                                                <li><a href="{{ route('front.category', ['slug' => $cat->slug]) }}">{{ $cat->name }}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>  
                                    </div>
                                    <div class="single-meta">
                                        <h4 class="title">Share: </h4>
                                        <div class="social-links d-inline-block">
                                            <ul>
                                                <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}&src=sdkpreparse" data-tippy="Facebook" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__black" data-tippy-placement="top"><i class="ion-social-facebook"></i></a></li>
                                                {{-- <li><a href="//twitter.com" data-tippy="Twitter" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__black" data-tippy-placement="top"><i class="ion-social-twitter"></i></a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>