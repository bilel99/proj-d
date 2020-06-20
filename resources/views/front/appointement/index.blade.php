@extends('front.layouts.app')

@section('content')
    {{-- Component HeroBanner --}}
    <hero-banner-component
            :page_id="9"
            hero_banner_class="hero-banner-appointment"
            logo_default="{{ asset('front/img/logos/logo-icon.png') }}">
    </hero-banner-component>

    <!-- section appointment -->
    <section id="detail-page" class="section-bg-white section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 py-3 px-3">
                    {{-- Component Detail Page --}}
                    <detail-page-component
                        :page_id="3"
                        class_id="detail-page"
                        class_section="section-bg-white section-padding"
                        img_default=""
                        route_page="{{ route('front.homepage') }}">
                    </detail-page-component>
                </div>

                <div class="col-md-6 col-sm-12 py-3 px-3">
                    {{-- Component Detail Page --}}
                    <detail-page-component
                        :page_id="12"
                        class_id="detail-page"
                        class_section="section-bg-white section-padding"
                        img_default=""
                        route_page="{{ route('front.homepage') }}">
                    </detail-page-component>
                </div>

                <div class="col-12 py-3 px-3">
                    {{-- Component Detail Page --}}
                    <detail-page-component
                        :page_id="13"
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
