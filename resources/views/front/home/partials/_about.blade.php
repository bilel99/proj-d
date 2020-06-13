{{-- Component Page --}}
<div id="about">
    <page-component
            :page_id="1"
            class_id="about"
            class_section="section-bg-white section-padding"
            img_default="{{ asset('front/img/image_doctor2.png') }}"
            api_data="{{ config('docteurs_gardes.api_base_url') }}"
            route_page="">
    </page-component>
</div>