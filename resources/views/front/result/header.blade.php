<div class="breadcrumb-area breadcrumb-area-bg section-space--inner--80 default-bg" data-bg="assets/img/backgrounds/19.jpg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
            @if ($results->count() === 0)
                <h2 class="breadcrumb-page-title">No Equipment Found</h2>
            @else
                <h2 class="breadcrumb-page-title">Search result for: <span style="text-decoration: underline">{{ Request::get('q') }}</span></h2>
            @endif
            </div>
        </div>
    </div>
</div>