@extends('front.layouts.app')

@section('content')
    @include('front.appointement.partials._banner')

    <!-- section contact -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">Comment contacter un médecin membre du réseau « Les Docteurs De Garde® - Maison
                        Médicale de Garde » ?</h2>
                    <hr class="botm-line">
                </div>

                <div class="col-12 px-5 py-5">
                    <p class="text-muted text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cum, ducimus eos error id officia porro quisquam quo, reiciendis rem repudiandae tempora tenetur veritatis! Autem cum explicabo nam omnis quia?
                    </p>

                    <div class="alert-message alert-message-danger">
                        <span class="text-center text-muted">
                            EN AUCUN CAS UN CONSEIL MEDICAL OU AVIS NE POURRA ETRE DONNE, MERCI DE CONTACTER LE 15 POUR PRENDRE RDV OU POUR AVIS
                        </span>
                    </div>
                </div>

                <div class="col-12">
                    @include('front.contact.partials._form_contact')
                </div>
            </div>
        </div>
    </section>
    <!-- /end section -->
@endsection