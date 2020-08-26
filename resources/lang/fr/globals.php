<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */
    'website' => [
        'name' => 'Les Docteurs de garde ®:',
        'info' => 'Maison Médicale de Garde Seine et Marne',
        'navbar' => [
            'qui-sommes-nous' => 'Qui sommes-nous',
            'nos-services' => 'Nos services',
            'comment-prendre-rendez-vous' => 'Comment prendre rendez-vous',
            'tarifs' => 'Tarifs',
            'ou-ce-situe-les-maisons-medicales-de-garde' => 'Ou se situe les maisons médicales de garde',
            'contact' => 'Nous contacter',
            'nos-informations' => 'Nos informations',
        ],
        'back-office' => 'Mon admin',
        'back_page' => 'Retour',
        'back_page_homepage' => 'Retour vers la homepage',
        'message_not_data_publish' => 'Oups, vous n\'avez encore rien publié, merci de bien vouloir éditer du contenu sur votre back office',
    ],

    'title' => [
        'homepage' => 'Bienvenue sur le site Docteur de garde',
        'price' => 'Nos tarifs de prix',
        'contact' => 'Nous contacter',
        'appointment' => 'Comment prendre rendez-vous',
    ],

    'services' => [
        'empty' => 'Aucun service pour le moment.',
    ],

    'attributes' => [
        'civility' => [
            'civility' => 'Civilité',
            'ms_label' => 'Mme',
            'mr_label' => 'Mr',
        ],
        'avatar' => 'Avatar',
        'name' => 'Nom',
        'firstname' => 'Prénom',
        'email' => 'Email',
        'password' => 'Mot de passe',
        'status' => [
            'status' => 'Statut',
            'actif' => 'Actif',
            'inactif' => 'Inactif'
        ],
        'unique_name' => 'slug',
        'title' => 'Titre',
        'content' => 'Contenu',
        'map' => 'Map',
        'address' => 'Adresse',
        'compl_address' => 'Complément d\'adresse',
        'phone' => 'Numéro de téléphone',
        'hours' => 'Heure',
        'infos' => 'Information supplémentaire',
        'icon' => 'Icone',
        'day' => 'Jours',
        'open' => 'Ouvertures',
        'doctor' => 'Docteur',
        'objet_demande' => 'L\'objet de la demande',
        'postal_code' => 'Code postal',
        'date_consultation' => 'Date de consultation',
        'objet_demande_doctor' => 'L\'objet de la demande du docteur',
        'precisions' => 'Précision',
        'objetDemandeOptions' => [
            'demande1' => 'Contacter le médecin qui vous a consulté',
            'demande2' => 'Contacter la société docteur de garde',
        ],
        'page_id' => 'Page',
        'types' => 'Types d\'alerte',
        'levels' => 'Niveau d\'alerte',
        'medias' => 'Medias',
        'content_row_1' => 'Contenu colonne 1',
        'content_row_2' => 'Contenu colonne 2'
    ],

    'helps' => [
        'icon' => [
            'title' => 'Panel d\'icone',
            'step1' => 'Au clic sur le bouton icone',
            'step2' => 'Vous pouvez choisir parmis une liste exhaustif votre icone',
            'step3' => 'Vous pouvez aussi retrouver toutes les icones <a href="https://fontawesome.com/icons?d=gallery">ici</a>',
        ]
    ],

    'email' => [
        'subject' => 'Votre demande de contact',
    ],

    'admin' => 'Administrateur',
    'logout' => 'Je me déconnecte',

    'basic_auth' => [
        'invalid_credentials' => 'informations d\'identification invalides',
    ],

    'btn' => [
        'back_office_link' => 'Accèder à mon back office',
    ],

    'contact' => [
        'success' => 'Votre demande de contact à bien été envoyé.',
        'not_found_doctor' => 'Le nom ou le prénom du médecin sont incorrect.',
        'error' => '',
    ],

    'errors' => [
        'email_bad_format' => 'Le format de l\'e-mail n’est pas valide. Merci de vérifier votre saisie.',
        'doctor_id_bad_required' => 'Ce champs est requis.',
        'objet_demande_bad_required' => 'Ce champs est requis.',
        'civility_bad_required' => 'Ce champs est requis.',
        'name_bad_required' => 'Ce champs est requis.',
        'firstname_bad_required' => 'Ce champs est requis.',
        'address_bad_required' => 'Ce champs est requis.',
        'postal_code_bad_required' => 'Ce champs est requis.',
        'email_bad_required' => 'Ce champs est requis.',
        'phone_bad_required' => 'Ce champs est requis.',
        'phone_bad_pattern' => 'Le format du numèro de téléphone n\'est pas valide.',
        'date_consultation_bad_required' => 'Ce champs est requis.',
        'objet_demande_doctor_bad_required' => 'Ce champs est requis.',
        'precisions_bad_required' => 'Ce champs est requis.',
        'min_required' => 'Pas assez de caractère sur ce champs.',
        'cp_valid' => 'Votre code postal n\'est pas valide.',
        'date_valid' => 'Votre date n\'est pas valide.',
        'title_bad_required' => 'Ce champs est requis.',
        'content_bad_required' => 'Ce champs est requis.',
    ]
];
