{{-- Component Prices --}}
<div id="medical-house">
    <price-component
            :page_id="4"
            class_id="prices"
            class_section="section-bg-grey section-padding"
            api_data="{{ config('docteurs_gardes.api_base_url') }}"
            btn_link="true"
            route_page="{{ route('front.prices') }}">
    </price-component>
</div>
