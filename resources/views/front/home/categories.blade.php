<div id="categories" class="industry-slider-area section-space--inner--120"  style="background-color:#fff; padding-bottom: 0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="section-title-area section-title-area--middle section-space--bottom--80">
                    <h2 class="title section-space--bottom--30">Food Equipments</h2>
                    <p class="section-title-content text-center desc-text">Machines being offered Are mostly 2nd Hand - Rebuilt. We supply also Brand-new Equiptment from Europe & USA for a special arrangements / special orders only</p>
                </div>
            </div>
        </div>
    </div>
    <div class="industry-slider-nav-area" style="background-color:#f7fafc;">
        <div class="swiper-container industry-slider-nav-container">
            <div class="swiper-wrapper industry-slider-nav-wrapper">
            @foreach ($categories as $category)
                <div class="swiper-slide">
                    <div class="industry-single-nav justify-content-between">
                        <span class="mr-1 ht-swiper-button-prev-2 d-block d-lg-none"><i class="ion-arrow-left-c"></i></span>
                        <div class="d-flex align-items-center">
                            <div class="industry-single-nav__icon">
                                <i class="{{ $category->icon }}"></i>
                            </div>
                            <div class="industry-single-nav__title">
                                {{ $category->name }}
                            </div>
                        </div>
                        <span class="ml-1 ht-swiper-button-next-2 d-block d-lg-none"><i class="ion-arrow-right-c"></i></span>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        <div class="ht-swiper-button-prev ht-swiper-button-prev-2 ht-swiper-button-nav d-none d-lg-block"><i class="ion-ios-arrow-left"></i></div>
        <div class="ht-swiper-button-next ht-swiper-button-next-2 ht-swiper-button-nav d-none d-lg-block"><i class="ion-ios-arrow-forward"></i></div>
    </div>
    <div class="industry-slider-content-area">
        <div class="swiper-container industry-slider-content-container">
            <div class="swiper-wrapper industry-slider-content-wrapper">
            @foreach ($categories as $category)
            <div class="swiper-slide">
                <div class="industry-slider-content-single bg-img" style="background-size: cover !important;" data-bg="{{ $category->img_dir }}">
                    <div class="container">
                        <div class="industry-content-inner" style="background: #F7FAFC; ">
                            <div class="section-title-area">
                                <h2 class="title title--left" style="margin-bottom: 1.2rem !important"> {{ $category->name }}</h2>
                            </div>
                            <p class="section-title-content" style="margin-bottom: 1.2rem !important; font-size: 16px !important"> {{ $category->description }}</p>
                            <style>
                                .imahe {
                                    width: 50px;
                                    height: 50px;
                                }
                            </style>
                            @php
                                $featuredItems = unserialize(serialize($category->items));
                                foreach ($category->items as $key => $item) {
                                    if ($item->is_featured != 1) unset($featuredItems[$key]);
                                }
                                $categoriesItems = count($featuredItems) == 0 ? $category->items : $featuredItems;
                            @endphp
                            @foreach ($categoriesItems->slice(0,2) as $item)
                                <div class="single-case-study-project" style="margin-bottom: 10px !important; display: flex; align-items: center">
                                    <div style="margin-left: 1rem">
                                        <img class="imahe" src="{{asset($item->img_dir[0])}}" alt="i{{$item->item_name}} image">
                                    </div>
                                    <div class="single-case-study-project__content" style="padding: 14px 20px !important">
                                        <h3 class="title" style="font-size: 16px !important"><a href="{{route('front.item', ['slug' => $item->slug])}}">{{$item->item_name}}</a></h3>
                                        <a href="{{route('front.category', ['slug' => $category->slug])}}" class="category">{{$category->name}}</a>
                                    </div>
                                </div>
                            @endforeach
                            <a href="{{ route('front.category', ['slug' => $category->slug]) }}" class="ht-btn ht-btn--dark" style="margin-top: 10px !important">MORE PRODUCTS</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
</div>