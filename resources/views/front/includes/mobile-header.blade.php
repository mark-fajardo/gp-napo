<div class="mobile-menu-overlay" id="mobile-menu-overlay">
    <div class="mobile-menu-overlay__header">
        <div class="container-fluid--cp-60">
            <div class="row align-items-center">
                <div class="col-md-4 col-sm-6 col-9">
                    <div class="logo">
                        <a href="{{route('front.index')}}">
                            <img src="{{ asset('assets/img/logo/darklogo.png') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 col-3">
                    <div class="mobile-menu-content">
                        <a class="mobile-navigation-close-icon" id="mobile-menu-close-trigger" href="javascript:void(0)">
                            <i class="ion-ios-close-empty"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu-overlay__body">
        <nav class="offcanvas-navigation">
            <ul>
                <li>
                    <form action="{{ route('front.search') }}" method="GET" class="form-group">
                        <input type="search" placeholder="Search equipments..." class="form-control text-white search-mobile" style="background: #4e4e4e" name="q">
                    </form>
                </li>
                <li>
                    <a href="{{route('front.index')}}">Home</a>
                </li>
                <li class="has-children">
                    <a href="#">Equipments</a>
                    <ul class="sub-menu">
                        @foreach ($categories as $category)
                            <li><a href="{{ route('front.category', ['slug' => $category->slug]) }}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="{{route('front.about')}}">About</a>
                </li>
                <li>
                    <a href="{{route('front.contact')}}">Contact Us</a>
                </li>
                <li>
                    <a href="{{route('front.quote')}}" style="color: #FFC246 !important">GET A QUOTE</a>
                </li>
            </ul>
        </nav>
    </div>
</div>