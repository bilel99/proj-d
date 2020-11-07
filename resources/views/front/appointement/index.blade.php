@extends('front.layouts.app')
@section('title') {{ __('globals.title.appointment') }}
@endsection

@section('content')
    {{-- Component HeroBanner --}}
    <hero-banner-component
        ajax-route="{{ route('front.ajax.hero-banner.appointment') }}"
        hero-banner-class="hero-banner-appointment">
    </hero-banner-component>

    <!-- section appointment -->
    <section id="detail-page" class="section-bg-white section-padding">
        <div class="container">
            <div class="back-page">
                <a href="{{ route('front.homepage') }}"
                   class="boxed-btn4 mx-3 mb-5"
                   title="{{ __('globals.website.back_page') }}">
                    {{ __('globals.website.back_page') }}
                </a>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-12 py-3 px-3 appointement-section-1">
                    {{-- Component Detail Page --}}
                    <detail-page-component
                        :page_id="{{ $appointment->id }}"
                        class_id="detail-page"
                        class_section="section-bg-white section-padding"
                        img_default=""
                        route_page="{{ route('front.homepage') }}">
                    </detail-page-component>
                </div>

                <div class="col-md-6 col-sm-12 py-3 px-3 appointement-section-2">
                    {{-- Component Detail Page --}}
                    <detail-page-component
                        :page_id="{{ $detailRdv->id }}"
                        class_id="detail-page"
                        class_section="section-bg-white section-padding"
                        img_default=""
                        route_page="{{ route('front.homepage') }}">
                    </detail-page-component>
                </div>

                <div class="col-12 py-3 px-3 appointement-section-3">
                    {{-- Component Detail Page --}}
                    <detail-page-component
                        :page_id="{{ $detaildoctors->id }}"
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
