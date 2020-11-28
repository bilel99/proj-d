@extends('front.layouts.app')
@section('title') {{ __('globals.title.contact') }}
@endsection

@section('content')
    <hero-banner-component
        ajax-route="{{ route('front.ajax.hero-banner.contact') }}"
        hero-banner-class="hero-banner-contact"
        go-to-target="#contact">
    </hero-banner-component>

    <contact-component
        ajax-route="{{ route('front.ajax.contact') }}"
        class_id="contact"
        class_section="section-bg-white section-padding">
    </contact-component>
@endsection
