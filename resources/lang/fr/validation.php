<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Le :attribute doit être accepté.',
    'active_url' => 'Le :attribute n\'est pas une URL valide.',
    'after' => 'Le :attribute doit être une date après :date.',
    'after_or_equal' => 'Le :attribute doit être une date postérieure ou égale à :date.',
    'alpha' => 'Le :attribute ne peut contenir que des lettres.',
    'alpha_dash' => 'Le :attribute ne peut contenir que des lettres, des chiffres, des tirets et des traits de soulignement.',
    'alpha_num' => 'Le :attribute ne peut contenir que des lettres et des chiffres.',
    'array' => 'Le :attribute doit être un tableau.',
    'before' => 'Le :attribute doit être une date avant :date.',
    'before_or_equal' => 'Le :attribute doit être une date antérieure ou égale à :date.',
    'between' => [
        'numeric' => 'Le :attribute doit être entre :min et :max.',
        'file' => 'Le :attribute doit être entre :min et :max kilobytes.',
        'string' => 'Le :attribute doit être entre :min et :max caractères.',
        'array' => 'Le :attribute doit avoir entre :min et :max items.',
    ],
    'boolean' => 'Le :attribute doit être vrai ou faux.',
    'confirmed' => 'Le :attribute la confirmation ne correspond pas.',
    'date' => 'Le :attribute la date n\'est pas valide.',
    'date_equals' => 'Le :attribute doit être une date égale à :date.',
    'date_format' => 'Le :attribute ne correspond pas au format :format.',
    'different' => 'Le :attribute est :other doit être différent.',
    'digits' => 'Le :attribute doit être :digits chiffres.',
    'digits_between' => 'Le :attribute doit être entre :min et :max chiffres.',
    'dimensions' => 'Le :attribute a des dimensions d\'image non valides.',
    'distinct' => 'Le :attribute a une valeur en double.',
    'email' => 'Le :attribute doit être une adresse email valide.',
    'ends_with' => 'Le :attribute doit se terminer par l\'une des :values suivante.',
    'exists' => 'Le champs séléctionné :attribute est invalid.',
    'file' => 'Le :attribute doit être un fichier.',
    'filled' => 'Le :attribute field doit avoir une valeur.',
    'gt' => [
        'numeric' => 'Le :attribute doit être plus grand que :value.',
        'file' => 'Le :attribute doit être plus grand que :value kilobytes.',
        'string' => 'Le :attribute doit être plus grand que :value caractères.',
        'array' => 'Le :attribute doit avoir plus que :value items.',
    ],
    'gte' => [
        'numeric' => 'Le :attribute doit être supérieur ou égale :value.',
        'file' => 'Le :attribute doit être supérieur ou égale :value kilobytes.',
        'string' => 'Le :attribute doit être supérieur ou égale :value caractères.',
        'array' => 'Le :attribute doit avoir :value items ou plus.',
    ],
    'image' => 'Le :attribute doit être une image.',
    'in' => 'Le champs séléctionné :attribute est invalid.',
    'in_array' => 'Le :attribute le champ n\'existe pas dans :other.',
    'integer' => 'Le :attribute doit être un entier.',
    'ip' => 'Le :attribute doit être une adresse IP valide.',
    'ipv4' => 'Le :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'Le :attribute doit être une adresse IPv6 valide.',
    'json' => 'Le :attribute doit être une chaine JSON.',
    'lt' => [
        'numeric' => 'Le :attribute doit être moins que :value.',
        'file' => 'Le :attribute doit être moins que :value kilobytes.',
        'string' => 'Le :attribute doit être moins que :value caractères.',
        'array' => 'Le :attribute doit avoir moins que :value items.',
    ],
    'lte' => [
        'numeric' => 'Le :attribute doit être moins que ou égale :value.',
        'file' => 'Le :attribute doit être moins que ou égale :value kilobytes.',
        'string' => 'Le :attribute doit être moins que ou égale :value caractères.',
        'array' => 'Le :attribute ne doit pas avoir plus de :value items.',
    ],
    'max' => [
        'numeric' => 'Le :attribute peut ne pas être plus grand que :max.',
        'file' => 'Le :attribute peut ne pas être plus grand que :max kilobytes.',
        'string' => 'Le :attribute peut ne pas être plus grand que :max caractère.',
        'array' => 'Le :attribute may not have more que :max items.',
    ],
    'mimes' => 'Le :attribute doit être un fichier de type: :values.',
    'mimetypes' => 'Le :attribute doit être un fichier de type: :values.',
    'min' => [
        'numeric' => 'Le :attribute doit être au moins :min.',
        'file' => 'Le :attribute doit être au moins :min kilobytes.',
        'string' => 'Le :attribute doit être at least :min caractères.',
        'array' => 'Le :attribute doit avoir au moins :min items.',
    ],
    'not_in' => 'Le champs séléctionné :attribute est invalid.',
    'not_regex' => 'Le :attribute le format n\'est pas valide.',
    'numeric' => 'Le :attribute doit être un nombre.',
    'password' => 'Le mot de passe est incorrect.',
    'present' => 'Le :attribute le champ doit être présent.',
    'regex' => 'Le :attribute le format n\'est pas valide.',
    'required' => 'Le :attribute Champ requis.',
    'required_if' => 'Le :attribute champ est obligatoire lorsque :other est :value.',
    'required_unless' => 'Le :attribute champ est obligatoire sauf si :other est dans :values.',
    'required_with' => 'Le :attribute champ est obligatoire lorsque :values est présent.',
    'required_with_all' => 'Le :attribute champ est obligatoire lorsque :values sont présents.',
    'required_without' => 'Le :attribute champ est obligatoire lorsque :values n\'est pas présent.',
    'required_without_all' => 'Le :attribute champ est obligatoire lorsqu\'aucune des :values est présent.',
    'same' => 'Le :attribute et :other doit correspondre.',
    'size' => [
        'numeric' => 'Le :attribute doit être :size.',
        'file' => 'Le :attribute doit être :size kilobytes.',
        'string' => 'Le :attribute doit être :size caractères.',
        'array' => 'Le :attribute doit contenir :size articles.',
    ],
    'starts_with' => 'Le :attribute doit commencer par l\'un des éléments suivants: :values.',
    'string' => 'Le :attribute doit être une chaîne.',
    'timezone' => 'Le :attribute doit être une zone valide.',
    'unique' => 'L\' :attribute a déjà été pris.',
    'uploaded' => 'Le :attribute échec du téléchargement.',
    'url' => 'Le :attribute format n\'est pas valide.',
    'uuid' => 'Le :attribute doit être un UUID valide.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
