@extends('front.layouts.app')
@section('title') {{ __('globals.title.contact') }}
@endsection

@section('content')
    <hero-banner-component
        ajax-route="{{ route('front.ajax.hero-banner.contact') }}"
        hero-banner-class="hero-banner-contact">
    </hero-banner-component>

    <contact-component
            :page_id="{{ $detailContact->id }}"
            class_id="contact"
            class_section="section-bg-white section-padding"
            route_page="{{ route('front.homepage') }}">
    </contact-component>
@endsection
