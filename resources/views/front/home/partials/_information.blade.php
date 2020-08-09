{{-- Component Information --}}
@isset($informations)
    <information-component
            :page_id="{{ $informations->id }}"
            class_id="information"
            class_section="section-bg-grey section-padding"
            route_page="">
    </information-component>
@endisset
