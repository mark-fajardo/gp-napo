@extends('layouts.front')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/plugins/sequencejs/sequence-theme.modern-slide-in.css') }}">
@endsection

@section('content')
    <div class="bg-gray-300 h-screen">

    </div>
{{--    <div id="sequence" class="seq bg-yellow-200">--}}

{{--        <div class="seq-screen">--}}
{{--            <ul class="seq-canvas">--}}
{{--                <li class="seq-in">--}}
{{--                    <div class="seq-model">--}}
{{--                        <img data-seq src="images/model1.png" alt="A female model with long curly brown hair wears a gray sweater, brown shorts, bright yellow socks, and black high heel shoes. She raises one leg, and tilts her head to the side" />--}}
{{--                    </div>--}}

{{--                    <div class="seq-title">--}}
{{--                        <h2 data-seq>Powered by Sequence.js</h2>--}}
{{--                        <h3 data-seq>The responsive CSS animation framework</h3>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <div class="seq-model">--}}
{{--                        <img data-seq src="images/model2.png" alt="A pale-skin female model with dark eye shadow and tied up hair wears dark green gloves, gray linen boots, and a woolen lined hood on a black zip-up jacket over a black top and shorts. She holds her jacket open with both hands and slightly raises her left knee whilst looking to the floor" />--}}
{{--                    </div>--}}

{{--                    <div class="seq-title">--}}
{{--                        <h2 data-seq>Create Unique Animated Themes</h2>--}}
{{--                        <h3 data-seq>For sliders, presentations, <br />banners, and other step-based applications</h3>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <div class="seq-model">--}}
{{--                        <img data-seq src="images/model3.png" alt="A pale-skin female model with platted hair wears a dark button-up jacket with gray shorts, black tights, brown shoes, and black gloves. She throws both arms back and raises one knee -- as if mid-jump -- whilst looking into the distance" />--}}
{{--                    </div>--}}

{{--                    <div class="seq-title">--}}
{{--                        <h2 data-seq>Rapid Development of Step-Based Applications</h2>--}}
{{--                        <h3 data-seq>All of the JavaScript functionality you need built-in</h3>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}

{{--        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">--}}
{{--            <button type="button" class="seq-prev" aria-label="Previous">Previous</button>--}}
{{--            <button type="button" class="seq-next" aria-label="Next">Next</button>--}}
{{--        </fieldset>--}}
{{--    </div>--}}

@endsection

@section('scripts')
<script src="{{ asset('js/plugins/sequencejs/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('js/plugins/sequencejs/hammer.min.js') }}"></script>
<script src="{{ asset('js/plugins/sequencejs/sequence.min.js') }}"></script>
<script src="{{ asset('js/plugins/sequencejs/sequence-theme.modern-slide-in.js') }}"></script>
@endsection