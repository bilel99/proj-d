{{-- Component HeroBanner --}}
@isset($homeHeroBanner)
    <hero-banner-component
            :page_id="{{ $homeHeroBanner->id }}"
            hero_banner_class="hero-banner"
            logo_default="{{ asset('front/img/logos/logo-icon.png') }}"
            route_contact="{{ route('front.contacts') }}">
    </hero-banner-component>
@endisset
