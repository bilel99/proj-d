@extends('front.layouts.app')

@section('content')
    @include('front.appointement.layout._banner')

    <!-- section appointment -->
    <section id="detail-page" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="title">Comment prendre rendez-vous ?</h2>
                    <hr class="botm-line">

                    <div class="content">
                        <p>
                            Afin d’obtenir un rendez-vous pour une consultation en urgence, vous
                            devez contacter le centre 15 Seine et Marne en composant le « 15 » sur
                            votre téléphone.
                        </p>

                        <p>
                            Vous pouvez également vous présenter au service d’Accueil des Urgences
                            de Jossigny ou de Meaux, l’agent d’accueil vous fournira un rendez-vous.
                        </p>

                        <p>
                            Selon le motif de l’appel au 15 ou de votre consultation aux urgences, en
                            absence de gravité un rendez-vous rapide vous sera proposé auprès des
                            Docteurs de Gardes®
                        </p>
                    </div>

                    <div class="warning">
                        <div class="alert-message alert-message-info">
                            <h2 class="title"><i class="fas fa-info"></i></h2>
                            <hr class="botm-line">
                            
                            <p>
                                EN VOUS PRESENTANT DIRECTEMENT AUX URGENCES VOUS
                                RISQUEZ DE NE PAS AVOIR DE RENDEZ-VOUS DISPONIBLE
                            </p>

                            <p>
                                RESERVEZ VOTRE RENDEZ-VOUS DE PREFERENCE AVEC LE 15.
                            </p>

                            <p>
                                Si votre état de santé s’aggrave avant votre rendez-vous avec le médecin :
                                n’hésitez pas à rappeler le centre d’appels pour le signaler. En cas
                                d’urgence grave contactez le SAMU (15).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="title">Ce que les Docteurs de Garde® ne font pas :</h2>
                    <hr class="botm-line">

                    <p class="text-muted">
                        Certains actes ne sont pas réalisables par les Docteurs de Gardes® selon les directives de la sécurité sociale :
                    </p>

                    <div class="content">
                        <p>
                            LES ARRETS DE TRAVAIL NE PEUVENT PAS ETRE DATES D’UN JOUR DIFFERENT DU JOUR DE LA CONSULTATION
                        </p>

                        <p>
                            Merci de prendre rendez-vous le jour même du début des symptômes, en effet aucun arrêt de travail ne pourra être fait pour une date autre que le jour de la consultation.
                        </p>

                        <p>
                            LES CERTIFICATS MEDICAUX : SPORT, ANNULATION VOYAGE, APTITUDE etc…
                        </p>

                        <p>
                            AUCUN DUPLICATA NE POURRA ETRE REALISE – LES DOCUMENTS ETANT FAIT A LA MAIN ET REMIS EN MAIN PROPRE MERCI DE REALISER DES COPIES AVANT TOUT ENVOI.
                        </p>
                    </div>

                    <div class="warning">
                        <div class="alert-message alert-message-info">
                            <h2 class="title"><i class="fas fa-info"></i></h2>
                            <hr class="botm-line">
                            
                            <p>
                                AUCUNE ANTI-DATATION NE POURRA ETRE EFFECTUEE (NI AVANT – NI APRES)
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <h2 class="title">Un rendez-vous dans quel délai ?</h2>
                    <hr class="botm-line">

                    <div class="content">
                        <p>
                            Les Docteurs de gardes ® vous proposeront via le 15 ou les urgences un
                            rendez- vous rapidement en général le jour même.
                        </p>

                        <p>
                            Les Docteurs de Gardes ® vous proposent des consultations de médecine
                            générale conventionnées secteur 1, avec des médecins généralistes
                            <span class="text-bold">uniquement sur rendez-vous</span>, en semaine, les week-ends et les jours
                            fériés.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ end section -->
@endsection