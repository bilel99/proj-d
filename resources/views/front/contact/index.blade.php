@extends('front.layouts.app')
@section('title') {{ __('globals.title.contact') }}
@endsection

@section('content')
    <hero-banner-component
            :page_id="{{ $contactHeroBanner->id }}"
            hero_banner_class="hero-banner-contact"
            logo_default="{{ asset('front/img/logos/logo-icon.png') }}"
            route_contact="">
    </hero-banner-component>

    <contact-component
            :page_id="{{ $detailContact->id }}"
            class_id="contact"
            class_section="section-bg-white section-padding"
            route_page="{{ route('front.homepage') }}">
    </contact-component>
@endsection