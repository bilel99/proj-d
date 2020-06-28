{{-- Component Page --}}
<page-component
    :page_id="{{ $appointment->id }}"
    class_id="make-appointment"
    class_section="section-bg-white section-padding"
    img_default="{{ asset('front/img/demande-contact.png') }}"
    route_page="{{ route('front.appointement') }}">
</page-component>
