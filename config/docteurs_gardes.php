<?php

return [

    /**
     * BASE URL
     */
    'route_login' => 'login',
    'login' => '/login',
    'admin' => '/nova',
    'home' => '/',

    /**
     * basic Auth Security for API
     */
    'BASIC_AUTH' => [
        'BASIC_AUTH_USERNAME' => env('BASIC_AUTH_USERNAME', ''),
        'BASIC_AUTH_PASSWORD' => env('BASIC_AUTH_PASSWORD', ''),
    ],

    /**
     * Navbar links
     */
    'navbar' => [
        0 => [
            'name' => 'qui-sommes-nous',
        ],
        1 => [
            'name' => 'nos-services',
        ],
        2 => [
            'name' => 'comment-prendre-rendez-vous',
        ],
        3 => [
            'name' => 'tarifs',
        ],
        4 => [
            'name' => 'ou-ce-situe-les-maisons-medicales-de-garde',
        ],
        5 => [
            'name' => 'contact',
        ],
        6 => [
            'name' => 'nos-informations',
        ],
    ],

    /**
     * Contact Form objects
     */
    'objet_contact' => [
        0 => [
            'name' => 'Contacter le médecin qui vous a consulté',
            'recipient' => '', // Envoie direct vers l'email du médecin
        ],
        1 => [
            'name' => 'Contacter la société Docteur De Garde',
            'recipient' => '', // Mettre l'email de la société
        ],
    ]
];