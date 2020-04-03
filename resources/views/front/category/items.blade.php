<div class="page-content-wrapper section-space--inner--50">
    <div class="shop-page-header mb-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    All Equipments
                </div>
            </div>
        </div>
    </div>

    <div class="shop-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-single-product-wrapper">
                        <div class="row">
                            @foreach ($categItems as $item)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="shop-single-product tilted">
                                    <div class="shop-single-product__thumb-wrapper mb-1">
                                        <div class="shop-single-product__image">
                                            <a href="{{ route('front.item', ['slug' => $item->slug]) }}">
                                                <img src="{{ asset($item->img_dir[0]) }}" class="img-fluid cat-item-img" alt="{{$item->item_name}} image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-single-product__content">
                                        <h3 class="shop-single-product__title" style="font-size: 1rem !important"><a href="{{ route('front.item', ['slug' => $item->slug]) }}">{{ $item->item_name }}</a></h3>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 d-flex justify-content-center justify-content-md-end mt-5">
                    {{ $categItems->links() }}
                </div>
            </div>
        </div>
    </div>
</div>