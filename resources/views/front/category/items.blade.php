<div class="page-content-wrapper section-space--inner--120">
    <div class="shop-page-header section-space--bottom--40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    Showing all results
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
                            @foreach ($category->items as $item)  
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="shop-single-product">
                                    <div class="shop-single-product__thumb-wrapper">
                                        <div class="shop-single-product__image">
                                                <a href="{{ route('front.item', ['slug' => $item->slug]) }}">
                                                    <img src="{{ asset($item->img_dir[0]) }}" class="img-fluid" alt="{{$item->item_name}} image">
                                                </a>
                                            </div>
                                    </div>
                                    <div class="shop-single-product__content">
                                        <h3 class="shop-single-product__title"><a href="{{ route('front.item', ['slug' => $item->slug]) }}">{{ $item->item_name }}</a></h3>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>