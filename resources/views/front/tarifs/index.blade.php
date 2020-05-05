@extends('front.layouts.app')

@section('content')
    @include('front.tarifs.layout._banner')

    <!-- section appointment -->
    <section id="detail-page" class="section-padding">
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

                <div class="col-md-12">
                    <h2 class="title">Suis-je remboursé des consultations ?</h2>
                    <hr class="botm-line">

                    <div class="col-md-12">
                        <div class="content">
                            <p>
                                Les frais de consultation seront remboursés à 100%.
                            </p>

                            <p>
                                Pour cela, les patients doivent avoir des droits à jour et une mutuelle.
                                Les Docteurs de Garde® effectueront une télétransmission à la sécurité
                                sociale grâce à votre carte vitale. Ce qui vous permettra d’être remboursé
                                automatiquement par votre mutuelle donc pas besoin de facture.
                            </p>

                            <p>
                                La tarification des consultations se fait selon le secteur 1 de la sécurité
                                sociale. Les Docteurs de Gardes® ne font pas de dépassement d’honoraire.
                                Vous n’avez qu’à régler le tiers payant.
                            </p>

                            <div class="warning">
                                <div class="alert-message alert-message-info">
                                    <h2 class="title"><i class="fas fa-info"></i></h2>
                                    <hr class="botm-line">

                                    <p>
                                        Le Tiers-Payant est pratiqué systématiquement.
                                        De ce fait, aucun payement ne sera demandé au patient avec une
                                        CMU/ALD/AME à jour.
                                    </p>
                                </div>
                            </div>

                            <p>
                                En cas d’absence de carte vitale à jour ou d’attestation de sécurité sociale
                                à jour, l’avancement des frais sera demandé au patient et une feuille de
                                soins lui sera remise afin d’obtenir un remboursement auprès de la
                                Sécurité Sociale.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-12">

                    <div class="alert-message alert-message-warning">
                        <h2 class="title"><i class="fas fa-exclamation-triangle"></i>&nbsp; ATTENTION</h2>
                        <hr class="botm-line">

                        <div class="content-info text-center">
                            <span class="block warn-info">
                                LA FACTURE SERA REALISEE PAR LE MEDECIN
                                UNIQUEMENT A LA DEMANDE DU PATIENT. AUCUNE COPIE NE
                                POURRA ETRE FAITE.
                            </span>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!--/ end section -->
@endsection