<div id="smartwizard" class="card">
    <ul>
        <li><a href="#step-1">Etape 1<br /><small>Séléctionner l'objet de votre demande</small></a></li>
        <li><a href="#step-2">Etapes 2<br /><small>Information civile</small></a></li>
        <li><a href="#step-3">Etapes 3<br /><small>Information médecin</small></a></li>
    </ul>

    <div>
        <form class="form-contact py-5 px-5" action="" method="post">

            <div id="step-1" class="">
                <!-- Select Obect -->
                <div class="form-group col-12">
                    <label for="">Séléctionner l'objet de votre demande <i class="mandatory">*</i></label>
                    <select name="dem_object" id="dem_object" class="form-control">
                        <option value="">Contacter le medecin qui vous a consulté</option>
                        <option value="">Contacter la société Docteur De Garde</option>
                    </select>
                </div>
            </div>

            <div id="step-2" class="">
                <!-- Part Civility -->
                <div class="form-row">
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="" class="d-block">Civilité <i class="mandatory">*</i></label>
                        <div class="input-group">
                            <div id="switch-radio" class="btn-group">
                                <a class="btn btn-primary btn active" data-toggle="happy" data-title="M">Monsieur</a>
                                <a class="btn btn-primary btn notActive" data-toggle="happy" data-title="Mme">Madame</a>
                            </div>
                            <input type="hidden" name="civility" id="civility" class="form-control">
                        </div>
                    </div>

                    <div class="form-group col-md-6 col-sm-12">
                        <label for="">Nom <i class="mandatory">*</i></label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nom">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="">Prénom <i class="mandatory">*</i></label>
                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Prénom">
                    </div>

                    <div class="form-group col-md-6 col-sm-12">
                        <label for="">Email <i class="mandatory">*</i></label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                    </div>
                </div>

                <hr>
                <!-- Part adress -->

                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="">Adresse <i class="mandatory">*</i></label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Adresse">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="">Code postal <i class="mandatory">*</i></label>
                        <input type="number" class="form-control" name="cp" id="cp" placeholder="Code postal">
                    </div>

                    <div class="form-group col-md-6 col-sm-12">
                        <label for="">Téléphone <i class="mandatory">*</i></label>
                        <input type="number" class="form-control" name="phone" id="phone" placeholder="Téléphone">
                    </div>
                </div>
            </div>

            <div id="step-3" class="">
                <!-- Part Consultation -->
                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="">Date de consultation <i class="mandatory">*</i></label>
                        <input type="date" class="form-control" name="date_consult" id="date_consult" placeholder="Date de consultation">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="">Nom du médecin <i class="mandatory">*</i></label>
                        <input type="text" class="form-control" name="doctor_name" id="doctor_name" placeholder="Nom du docteur">
                    </div>

                    <div class="form-group col-md-6 col-sm-12">
                        <label for="">Prénom du médecin <i class="mandatory">*</i></label>
                        <input type="text" class="form-control" name="doctor_firstname" id="doctor_firstname" placeholder="Prénom du docteur">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="">Objet de la demande <i class="mandatory">*</i></label>
                        <input type="text" class="form-control" name="obj_demande_medecin" id="obj_demande_medecin" placeholder="Objet de la demande">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="">Précisions </label>
                        <textarea name="text" id="text" class="form-control" cols="30" rows="10">Merci de saisir votre texte ici</textarea>
                    </div>
                </div>

            </div>

        </form>
    </div>
</div>
