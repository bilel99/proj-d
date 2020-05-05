@extends('front.layouts.app')

@section('content')

    <!--banner-->
    @include('front.layouts.partials._banner')
    <!--/ banner-->

    <!-- section about -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="title">Qui sommes-nous ?</h2>
                    <hr class="botm-line">

                    <div class="content">
                        <p>
                            Les Docteurs de Garde® sont des acteurs majeurs de la prise en charge médicale
                            urgente en partenariat avec les Hôpitaux publics. Ils assurent la prise en charge
                            des différentes urgences médicales et des soins non programmés, des urgences
                            non vitales et la permanence des soins en Ile de France.
                        </p>

                        <p>
                            Nos médecins sont sélectionnés selon leur expérience dans la prise en charge des
                            patients en médecine d’urgence.
                        </p>

                        <p>
                            Les Docteurs de Garde ®, sont une structure qui assure les consultations en
                            médecine générale d’urgences en Seine et Marne en partenariat avec Le Grand
                            Hôpital de l&#39;Est Francilien (GHEF) et l’Agence Régionale de la Santé (ARS)
                        </p>

                        <p>
                            Ce service permet de répondre à la demande en soin de la population afin d’avoir
                            une consultation en urgence de médecine générale le soir, weekend et les jours
                            fériés.
                        </p>

                        <p>
                            Ces consultations sont organisées grâce à différentes Maisons Médicales de
                            Garde qui assurent les consultations non programmées en médecine générale, en
                            urgence pour les enfants, les adultes et les patients âgés.
                        </p>
                    </div>

                    <div class="warning">
                        <div class="alert-message alert-message-info">
                            <h2 class="title"><i class="fas fa-info"></i></h2>
                            <hr class="botm-line">
                            
                            <p>
                                Nos centres médicaux de consultation d’urgence et de permanence de soins vous
                                accueillent, sur rendez-vous uniquement.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('front/img/image_doctor2.png') }}" class="img-responsive" alt="Qui sommes nous">
                </div>
            </div>
        </div>
    </section>
    <!--/ end section -->

    <!--service-->
    <section id="service" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <h2 class="title">Nos services</h2>
                    <hr class="botm-line">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris cillum.</p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="service-info card">
                        <div class="icon">
                            <i class="fa fa-stethoscope"></i>
                        </div>
                        <div class="icon-info">
                            <h4>24/24h</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="service-info card">
                        <div class="icon">
                            <i class="fa fa-ambulance"></i>
                        </div>
                        <div class="icon-info">
                            <h4>Emergency Services</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="service-info card">
                        <div class="icon">
                            <i class="fa fa-user-md"></i>
                        </div>
                        <div class="icon-info">
                            <h4>Medical Counseling</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="service-info card">
                        <div class="icon">
                            <i class="fa fa-medkit"></i>
                        </div>
                        <div class="icon-info">
                            <h4>Premium Healthcare</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ end section -->

    <!-- section appointment -->
    <section id="make-appointment" class="section-padding">
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
                </div>

                <div class="col-md-6">
                    <img src="{{ asset('front/img/demande-contact.png') }}" class="img-responsive" alt="Qui sommes nous">
                </div>

                <div class="col-md-12 flex">
                    <a href="{{ route('front.appointement') }}" class="btn btn-prim">
                        En savoir plus
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--/ end section -->

    <!-- section transition -->
    <section id="transition" class="section-padding"></section>
    <!-- /end section -->

    <!-- section price -->
    <section id="prices" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Tarifs secteur 1 à titre indicatif au 1er Janvier 2020</h2>
                    <hr class="botm-line">

                    <div class="col-md-12">
                        <div class="table-responsive">
                            <div class="membership-pricing-table">
                                <table class="table table-responsive">
                                    <tbody>
                                    <tr>
                                        <th></th>

                                        <th class="plan-header plan-header-blue">
                                            <div class="pricing-plan-name">ADULTES &gt; 6 ans</div>
                                        </th>

                                        <th class="plan-header plan-header-standard">
                                            <div class="header-plan-inner">
                                                <div class="pricing-plan-name">ENFANTS de 0 à 6 ans</div>
                                            </div>
                                        </th>
                                    </tr>

                                    <tr>
                                        <td>Consultations du soir de 20h à minuit:</td>
                                        <td>C + CRN = 67.50 € - Tiers Payant = 20.25 €*</td>
                                        <td>C + MEG + CRN = 72.50 € - Tiers Payant = 21.75 €*</td>
                                    </tr>
                                    <tr>
                                        <td>Consultations des Samedis de 12h à 20h:</td>
                                        <td>C + CRS = 51.50 € - Tiers Payant = 15.45 €*</td>
                                        <td>C + MEG + CRS = 56.50 € - Tiers Payant = 16.95 €*</td>
                                    </tr>
                                    <tr>
                                        <td>Consultations des Dimanches et Jours Fériés de 8h à 20h:</td>
                                        <td>C + CRD = 51.50 € - Tiers Payant = 15.45 €*</td>
                                        <td>C + MEG + CRD = 56.50 € - Tiers Payant = 16.95 €*</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="alert-message alert-message-danger">
                            <span class="block red"><i class="fas fa-asterisk"></i>&nbsp; Si droits à la sécurité sociale ouverts et si carte vitale à jour.</span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="alert-message alert-message-info">
                            <span class="block red"><i class="fas fa-info"></i>&nbsp; Vous ne payez que le Tiers payant si droits à jours.</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 flex">
                    <a href="{{ route('front.tarifs') }}" class="btn btn-prim">
                        En savoir plus
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- /end section -->

    <!-- section medical-house -->
    <section id="medical-house" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Ou se situe les Maisons médicales de garde ? </h2>
                    <hr class="botm-line">
                </div>


                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <span class="pull-right">
                                <!-- Tabs -->
                                <ul class="nav panel-tabs">
                                    <li class="active"><a href="#tab1" data-toggle="tab">Tab 1</a></li>
                                    <li><a href="#tab2" data-toggle="tab">Tab 2</a></li>
                                    <li><a href="#tab3" data-toggle="tab">Tab 3</a></li>
                                    <li><a href="#tab4" data-toggle="tab">Tab 4</a></li>
                                </ul>
                            </span>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At</div>
                                <div class="tab-pane" id="tab2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</div>
                                <div class="tab-pane" id="tab3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</div>
                                <div class="tab-pane" id="tab4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</div>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </section>
    <!-- /end section -->

    <!-- section other -->
    <section id="other-section" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Nos informations</h2>
                    <hr class="botm-line">
                </div>

                <div class="col-md-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                       aria-expanded="true" aria-controls="collapseOne">
                                        Quels sont les horaires d’ouverture ?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                 aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <p class="info-paragraph">
                                        <span>
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        &nbsp;
                                        Merci de vous présenter au niveau de l’accueil des services d’urgence de
                                        Meaux ou Jossigny 20 minutes avant votre Rendez-vous, afin d’être
                                        orienté vers la Maison Médicale de Garde.
                                    </p>

                                    <p class="info-paragraph">
                                        <span>
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        &nbsp;
                                        Horaires d'ouverture :
                                    </p>

                                    <table class="table table-responsive table-condensed table-striped">
                                        <tr>
                                            <th>En semaine :</th>
                                            <th>20h à minuit</th>
                                        </tr>
                                        <tr>
                                            <th>Le samedi :</th>
                                            <th>12h à minuit</th>
                                        </tr>
                                        <tr>
                                            <th>Le dimanche et les jours fériés :</th>
                                            <th>8h à minuit</th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Avant la consultation :
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <p class="info-paragraph">
                                        <span>
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        &nbsp;
                                        Merci de vous présenter au niveau de l’accueil des services d’urgence de
                                        Meaux ou Jossigny 20 minutes avant votre Rendez-vous, afin d’être
                                        orienté vers la Maison Médicale de Garde.
                                    </p>

                                    <p class="info-paragraph">
                                        <span>
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        &nbsp;
                                        Merci de vous munir de votre dernière ordonnance, du carnet de santé de
                                        votre enfant et de votre carte vitale à jour et/ou de votre attestation
                                        CMU, ALD, AME etc.
                                    </p>

                                    <p class="info-paragraph">
                                        <span>
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        &nbsp;
                                        Le médecin des Docteurs de Gardes® vous appellera dans la salle d’attente
                                        afin de réaliser votre une consultation.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Après la consultation :
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <p class="info-paragraph">
                                        <span>
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        &nbsp;
                                        Merci de conserver tous vos documents, aucun duplicata ne pourra être
                                        fournis.
                                    </p>

                                    <p class="info-paragraph">
                                        <span>
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        &nbsp;
                                        De même, merci de revoir votre médecin traitant dans les 48h pour le suivi
                                        et la réévaluation de votre état de santé en lui présentant l’ordonnance
                                        des Docteurs de Garde®.
                                    </p>

                                    <p class="info-paragraph">
                                        <span>
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        &nbsp;
                                        En cas d’aggravation après une consultation, merci de contacter le 15 pour
                                        avis ou revoir votre médecin traitant dans les plus brefs délais.
                                    </p>

                                    <div class="flex col-md-12">
                                        <div class="alert alert-danger">
                                            <span><i class="fas fa-info"></i>&nbsp; aucun duplicata ne pourra être fournis.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /end section -->

    <!-- section contact -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Comment contacter un médecin membre du réseau « Les Docteurs De Garde® -  Maison Médicale de Garde » ?</h2>
                    <hr class="botm-line">
                </div>

                <div class="col-md-6">
                    <h3>Pour tout contact, il faudra renseigner le formulaire de contact et écrire votre demande.</h3>

                    <div class="warning">
                        <div class="alert-message alert-message-warning">
                            <h2 class="title"><i class="fas fa-info"></i></h2>
                            <hr class="botm-line">

                            <p>
                                EN AUCUN CAS UN CONSEIL MEDICAL OU AVIS NE POURRA ETRE DONNE
                                MERCI DE CONTACTER LE 15 POUR PRENDRE RDV OU POUR AVIS
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <form action="" method="post">
                            <h2 class="text-center">Demande de contact</h2>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="toto">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="toto">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="toto">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="toto">
                            </div>

                            <div class="flex">
                                <button class="form-control bnt btn-contact">toto</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /end section -->
@endsection