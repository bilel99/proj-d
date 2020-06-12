{{-- Component About --}}
<div id="about">
    <about-component
            :page_id="1"
            img_default="{{ asset('front/img/image_doctor2.png') }}"
            api_data="{{ config('docteurs_gardes.api_base_url') }}">
    </about-component>
</div>