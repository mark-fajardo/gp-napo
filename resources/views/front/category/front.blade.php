
<div class="container">
<div class="row">
    <div class="col-lg-12 section-space--inner--50">
    
    <div class="section-title-area section-title-area--middle section-space--bottom--30 align-items-start">
        <h4 class="subtitle pl-3 py-2 front-text">FEATURED EQUIPMENTS</h4>
        {{-- <h2 class="title" style="margin-top: -20px"></h2> --}}
    </div>

    <div class="featured-project-two-slider" style="max-height: 500px">
        <div class="swiper-container featured-project-two-slider-container" style="max-height: 500px">
            <div class="swiper-wrapper featured-project-two-slider-wrapper">
                @foreach ($category->items as $item)
                @if ($item->is_featured == 1)
                    <div class="swiper-slide">
                        <div class="feature-project-two-single-item" style="box-shadow: none; border: #F7FAFC solid 1px">
                            <div class="shop-single-product__badges">
                                <span class="onsale">BEST</span>
                            </div>
                            <div class="feature-project-two-single-item__image px-3 px-3">
                                <img src="{{ asset($item->img_dir[0]) }}" class="img-fluid" alt="{{$item->item_name}} image" style="object-fit: contain ;max-height: 340px;">
                            </div>
                            <div class="feature-project-two-single-item__content" style="overflow: hidden;text-overflow: ellipsis;">
                                <a href="case-study-single-slider.html" class="stretched-link" style="font-size: 1rem !important; text-overflow: ellipsis;">{{$item->item_name}}</a>
                            </div>
                        </div>
                    </div>
                @endif
                @endforeach
            </div>
        </div>
        <div class="ht-swiper-button-prev ht-swiper-button-prev-1 ht-swiper-button-nav d-none d-lg-block" style="left: -80px"><i class="ion-ios-arrow-left"></i></div>
        <div class="ht-swiper-button-next ht-swiper-button-next-1 ht-swiper-button-nav d-none d-lg-block" style="right: -80px"><i class="ion-ios-arrow-forward"></i></div>
    </div>

    </div>
</div>
</div>
