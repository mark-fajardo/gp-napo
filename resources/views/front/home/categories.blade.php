<div class="industry-slider-area section-space--inner--120"  style="background-color:#fff; padding-bottom: 0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="section-title-area section-title-area--middle section-space--bottom--80">
                    <h2 class="title section-space--bottom--30">Equipments</h2>
                    <p class="section-title-content text-center">Machines being offered Are mostly 2nd Hand - Rebuilt. We supply also Brand-new Equiptment from Europe & USA for a special arrangements / special orders only</p>
                </div>
            </div>
        </div>
    </div>
    <!-- industry slider nav -->
    <div class="industry-slider-nav-area" style="background-color:#f7fafc;">
        <div class="swiper-container industry-slider-nav-container">
            <div class="swiper-wrapper industry-slider-nav-wrapper">
            @foreach ($categories as $category)
                <div class="swiper-slide">
                    <div class="industry-single-nav">
                        <div class="industry-single-nav__icon">
                            <i class="{{ $category->icon }}"></i>
                        </div>
                        <div class="industry-single-nav__title">
                            {{ $category->name }}
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        <div class="ht-swiper-button-prev ht-swiper-button-prev-2 ht-swiper-button-nav d-none d-lg-block"><i class="ion-ios-arrow-left"></i></div>
        <div class="ht-swiper-button-next ht-swiper-button-next-2 ht-swiper-button-nav d-none d-lg-block"><i class="ion-ios-arrow-forward"></i></div>
    </div>
    <!-- industry slider content -->
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
                            
                            <a href="service-details-4.html" class="ht-btn ht-btn--dark" style="margin-top: 10px !important">MORE PRODUCTS</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
</div>