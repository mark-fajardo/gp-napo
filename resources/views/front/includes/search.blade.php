<div class="search-overlay" id="search-overlay">
    <a id="popup-search-close" href="#" class="popup-search-close"><i class="ion-ios-close-empty"></i></a>
    <div class="page-popup-search-inner">
        <form action="{{ route('front.search') }}" method="GET">
            <input type="text" class="search-field" id="search-field" name="q">
        </form>
        <p class="form-description">Hit enter to search or ESC to close</p>
    </div>
</div>