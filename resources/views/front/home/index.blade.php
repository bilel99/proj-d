@extends('front.layouts.app')

@section('content')
    @if($homeHeroBanner === null && $contactHeroBanner === null && $aboutHeroBanner === null &&
        $priceHeroBanner === null && $informations === null && $medicalHouse === null &&
        $tarif === null && $appointment === null && $services === null &&
        $about === null && $detailContact === null && $detaildoctors === null &&
        $detailRdv === null && $detailRefound === null)

        <h2 class="d-flex justify-content-center text-muted px-5 py-5">
            {{ __('globals.website.message_not_data_publish') }}
        </h2>

        <!-- Button Link -->
        <div class="d-flex justify-content-center mt-5 mb-3">
            <a href="/nova" title="mon back office" class="boxed-btn3 page-btn">{{ __('globals.btn.back_office_link') }}</a>
        </div>

    @else


        <!--banner-->
        @include('front.layouts.partials._hero-banner')
        <!--/ banner-->

        <!-- section about -->
        @include('front.home.partials._about')
        <!--/ end section -->

        <!--service-->
        @include('front.home.partials._services')
        <!--/ end section -->

        <!-- section appointment -->
        @include('front.home.partials._make-appointment')
        <!--/ end section -->

        <!-- section transition -->
        <section id="section-transition" class="section-transition section-padding"></section>
        <!-- /end section -->

        <!-- section price -->
        @include('front.home.partials._price')
        <!-- /end section -->

        <!-- section medical-house -->
        @include('front.home.partials._medical-house')
        <!-- /end section -->

        <!-- Transition Contact -->
        <section id="section-transition-contact"
                 class="section-transition-contact d-flex justify-content-center align-items-center">
            <a href="{{ route('front.contacts') }}" class="boxed-btn3">Nous contacter</a>
        </section>
        <!-- /end -->

        <!-- section information -->
        @include('front.home.partials._information')
        <!-- /end section -->

    @endif
@endsection