<div class="page-content-wrapper section-space--inner--120">
    <div class="shop-page-header section-space--bottom--40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    Showing all results
                </div>
                <div class="col-sm-6">
                    <div class="sort-selection-wrapper text-left text-sm-right">
                        <select class="sort-selection">
                            <option selected="selected">Default sorting</option>
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date">Sort by latest</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                    </div>
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
                            @foreach ($items as $item)
                                @foreach ($item->categories as $icat)
                                    {{-- @foreach ($category->items as $citem) --}}
                                        @if ($icat->id == $category->id)
                                            
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="shop-single-product">
                                                <div class="shop-single-product__thumb-wrapper">
                                                    <div class="shop-single-product__image">
                                                        <a href="{{ route('front.item', ['slug' => $item->slug]) }}" class="single-img-wrapper">
                                                            <img src="{{ asset('storage/' . $item->img_dir[0]) }}" class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="shop-single-product__content">
                                                    <h3 class="shop-single-product__title"><a href="{{ route('front.item', ['slug' => $item->slug]) }}">{{ $item->item_name }}</a></h3>
                                                </div>
                                            </div>
                                        </div>

                                        @endif
                                    {{-- @endforeach --}}
                                @endforeach     
                                
                            @endforeach
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>