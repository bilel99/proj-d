<?php

return [

    /**
     * BASE URL
     */
    'route_login' => 'login',
    'login' => '/login',
    'admin' => '/nova',
    'home' => '/',

    'BASIC_AUTH' => [
        'BASIC_AUTH_USERNAME' => env('BASIC_AUTH_USERNAME', ''),
        'BASIC_AUTH_PASSWORD' => env('BASIC_AUTH_PASSWORD', ''),
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