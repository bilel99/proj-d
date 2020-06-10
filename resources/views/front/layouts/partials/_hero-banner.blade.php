{{-- Component HeroBanner --}}
<div id="heroBanner">
    <hero-banner-component :hero_banner_id="{{ $heroBanner->id }}" api_data="{{ config('docteurs_gardes.api_base_url') . 'get-relations-page' }}"></hero-banner-component>
</div>