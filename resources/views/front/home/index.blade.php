@extends('front.layouts.app')

@section('content')
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
    <section id="section-transition-contact" class="section-transition-contact d-flex justify-content-center align-items-center">
        <a href="{{ route('front.contacts') }}" class="boxed-btn3">Nous contacter</a>
    </section>
    <!-- /end -->

    <!-- section information -->
    @include('front.home.partials._information')
    <!-- /end section -->
@endsection