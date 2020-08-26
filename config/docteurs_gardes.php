<?php

return [

    /**
     * BASE URL
     */
    'route_login' => 'login',
    'login' => '/login',
    'admin' => '/nova',
    'home' => '/',
    'api_base_url' => env('API_BASE_URL', ''),

    /**
     * basic Auth Security for API
     */
    'BASIC_AUTH' => [
        'BASIC_AUTH_USERNAME' => env('BASIC_AUTH_USERNAME', ''),
        'BASIC_AUTH_PASSWORD' => env('BASIC_AUTH_PASSWORD', ''),
    ],

    /**
     * Access Token API
     */
    'ACCESS_API_TOKEN' => env('ACCESS_API_TOKEN', ''),

    /**
     * society
     */
    'email_docteur_de_garde' => 'contactdrdegarde@gmail.com',

    /**
     * Navbar links
     */
    'navbar' => [
        0 => [
            'name' => 'qui-sommes-nous',
            'hash' => '#about',
        ],
        1 => [
            'name' => 'nos-services',
            'hash' => '#service',
        ],
        2 => [
            'name' => 'comment-prendre-rendez-vous',
            'hash' => '#make-appointment',
        ],
        3 => [
            'name' => 'tarifs',
            'hash' => '#prices',
        ],
        4 => [
            'name' => 'ou-ce-situe-les-maisons-medicales-de-garde',
            'hash' => '#medical-house',
        ],
        5 => [
            'name' => 'contact',
            'hash' => '#section-transition-contact',
        ],
        6 => [
            'name' => 'nos-informations',
            'hash' => '#information',
        ],
    ],

    /**
     * Contact Form objects
     */
    'objet_contact' => [
        0 => [
            'name' => 'Contacter le médecin qui vous a consulté',
            'recipient' => '', // email du médecin
        ],
        1 => [
            'name' => 'Contacter la société Docteur De Garde',
            'recipient' => 'contactdrdegarde@gmail.com', // email de la société
        ],
    ],

    /**
     * Valid Host Security API
     */
    'VALID_HOST' => env('VALID_HOST', ''),
];