@extends('front.layouts.app')

@section('content')
    <hero-banner-component
            :page_id="11"
            hero_banner_class="hero-banner-contact"
            logo_default="{{ asset('front/img/logos/logo-icon.png') }}">
    </hero-banner-component>

    <contact-component
            :page_id="6"
            class_id="contact"
            class_section="section-bg-white section-padding"
            route_page="{{ route('front.homepage') }}">
    </contact-component>
@endsection