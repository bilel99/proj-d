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
            :page_id="{{ $tarif->id }}"
            class_id="prices"
            class_section="section-bg-white section-padding"
            is_button="false"
            route_page="{{ route('front.prices') }}">
    </price-component>

    <!-- section Prices -->
    <section id="detail-page" class="section-bg-white section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <!-- Component Detail Page -->
                    <detail-page-component
                        :page_id="{{ $detailRefound->id }}"
                        class_id="detail-page"
                        class_section="section-bg-white section-padding"
                        img_default=""
                        route_page="{{ route('front.homepage') }}">
                    </detail-page-component>
                </div>
            </div>
        </div>
    </section>
    <!--/ end section -->
@endsection
