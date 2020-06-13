{{-- Component MedicalHouse --}}
<div id="medical-house">
    <medical-house-component
            :page_id="5"
            class_id="medical-house"
            class_section="section-bg-white section-padding"
            img_default=""
            api_data="{{ config('docteurs_gardes.api_base_url') }}"
            route_page="">
    </medical-house-component>
</div>
