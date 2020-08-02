<!-- Component Prices -->
@isset($tarif)
    <price-component
            :page_id="{{ $tarif->id }}"
            class_id="prices"
            class_section="section-bg-white section-padding"
            is_button="true"
            route_page="{{ route('front.prices') }}">
    </price-component>
@endisset
