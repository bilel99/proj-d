@extends('front.layouts.app')

@section('content')
    {{-- Component HeroBanner --}}{{--
    <div id="heroBanner">
        <hero-banner-component
                :hero_banner_id="9"
                hero_banner_class="hero-banner-appointment"
                logo_default="{{ asset('front/img/logos/logo-icon.png') }}">
        </hero-banner-component>
    </div>

    <!-- section appointment -->
    <section id="detail-page" class="section-bg-white section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 py-3 px-3">
                    --}}{{-- Component Detail Page --}}{{--
                    <div id="detail-page">
                        <detail-page-component
                            :page_id="3"
                            class_id="detail-page"
                            class_section="section-bg-white section-padding"
                            route_page="{{ route('front.homepage') }}">
                        </detail-page-component>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 py-3 px-3">
                    --}}{{-- Component Detail Page --}}{{--
                    <div id="detail-page">
                        <detail-page-component
                            :page_id="12"
                            class_id="detail-page"
                            class_section="section-bg-white section-padding"
                            route_page="{{ route('front.homepage') }}">
                        </detail-page-component>
                    </div>
                </div>

                <div class="col-12 py-3 px-3">
                    --}}{{-- Component Detail Page --}}{{--
                    <div id="detail-page">
                        <detail-page-component
                            :page_id="13"
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
