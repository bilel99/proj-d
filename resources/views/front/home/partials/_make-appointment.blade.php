{{-- Component Page --}}
<div id="make-appointment">
    <page-component
            :page_id="3"
            class_id="make-appointment"
            class_section="section-bg-white section-padding"
            api_data="{{ config('docteurs_gardes.api_base_url') }}"
            route_page="{{ route('front.appointement') }}">
    </page-component>
</div>
