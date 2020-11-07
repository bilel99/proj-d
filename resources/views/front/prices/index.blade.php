@extends('front.layouts.app')
@section('title') {{ __('globals.title.price') }}
@endsection

@section('content')
    <!-- Component Hero Banner -->
    <hero-banner-component
        ajax-route="{{ route('front.ajax.hero-banner.price') }}"
        hero-banner-class="hero-banner-price">
    </hero-banner-component>

    <!-- Component Prices -->
    <price-component
            ajax-route="{{ route('front.ajax.get.prices') }}"
            class_id="prices"
            class_section="section-bg-white section-padding"
            is_button="true">
    </price-component>

    <!-- section Prices -->
    <section id="detail-page" class="section-bg-white section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <!-- Component Detail Page -->
                    <detail-page-component
                        ajax-route="{{ route('front.ajax.get.prices.refound') }}"
                        class_id="detail-page"
                        class_section="section-bg-white section-padding">
                    </detail-page-component>
                </div>
            </div>
        </div>
    </section>
    <!--/ end section -->
@endsection
