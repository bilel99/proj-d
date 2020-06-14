@extends('front.layouts.app')

@section('content')
    {{-- Component HeroBanner --}}{{--
    <div id="heroBanner">
        <hero-banner-component
                :hero_banner_id="10"
                hero_banner_class="hero-banner-price"
                logo_default="{{ asset('front/img/logos/logo-icon.png') }}">
        </hero-banner-component>
    </div>

    --}}{{-- Component Prices --}}{{--
    <div id="medical-house">
        <price-component
                :page_id="4"
                class_id="prices"
                class_section="section-bg-white section-padding"
                btn_link="false"
                route_page="{{ route('front.prices') }}">
        </price-component>
    </div>

    <!-- section Prices -->
    <section id="detail-page" class="section-bg-white section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    --}}{{-- Component Detail Page --}}{{--
                    <div id="detail-page">
                        <detail-page-component
                                :page_id="14"
                                class_id="detail-page"
                                class_section="section-bg-white section-padding"
                                route_page="{{ route('front.homepage') }}">
                        </detail-page-component>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ end section -->--}}
@endsection
