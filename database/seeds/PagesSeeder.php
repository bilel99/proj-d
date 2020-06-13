<?php

use App\Models\Pages;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            [
                'unique_name' => Str::slug(strtolower('Qui Sommes nous'), '-'),
                'title' => 'Qui sommes-nous ?',
            ],
            [
                'unique_name' => Str::slug(strtolower('NOS SERVICES'), '-'),
                'title' => 'Nos services',
            ],
            [
                'unique_name' => Str::slug(strtolower('COMMENT PRENDRE RENDEZ-VOUS'), '-'),
                'title' => 'Comment prendre rendez-vous ?',
            ],
            [
                'unique_name' => Str::slug(strtolower('TARIFS'), '-'),
                'title' => 'Tarifs secteur 1 à titre indicatif au 1er Janvier 2020',
                'content' => 'du lorem ispum',
            ],
            [
                'unique_name' => Str::slug(strtolower('OU SE SITUE LES MAISONS MÉDICALES DE GARDE'), '-'),
                'title' => 'Ou se situe les Maisons médicales de garde ?',
                'content' => 'du lorem ispum',
            ],
            [
                'unique_name' => Str::slug(strtolower('contacts'), '-'),
                'title' => 'Contact',
            ],
            [
                'unique_name' => Str::slug(strtolower('NOS INFORMATIONS'), '-'),
                'title' => 'Nos informations',
            ],
            [
                'unique_name' => Str::slug(strtolower('baniere homepage'), '-'),
                'title' => 'MAISON MÉDICALE DE GARDE SEINE ET MARNE',
                'content' => 'Les Docteurs de Garde® sont des acteurs majeurs de la prise en charge médicale urgente en partenariat avec les Hôpitaux publics. Ils assurent la prise en charge des différentes urgences médicales et des soins non programmés, des urgences non vitales et la permanence des soins en Ile de France.',
            ],
            [
                'unique_name' => Str::slug(strtolower('baniere qui somme nous'), '-'),
                'title' => 'Baniere qui somme nous',
            ],
            [
                'unique_name' => Str::slug(strtolower('baniere tarifs'), '-'),
                'title' => 'Baniere tarifs',
            ],
            [
                'unique_name' => Str::slug(strtolower('baniere contact'), '-'),
                'title' => 'Baniere contact',
            ],
            [
                'unique_name' => Str::slug(strtolower('CE QUE LES DOCTEURS DE GARDE NE FONT PAS'), '-'),
                'title' => 'CE QUE LES DOCTEURS DE GARDE® NE FONT PAS',
            ],
            [
                'unique_name' => Str::slug(strtolower('UN RENDEZ-VOUS DANS QUEL DÉLAI'), '-'),
                'title' => 'UN RENDEZ-VOUS DANS QUEL DÉLAI ?',
            ],
            [
                'unique_name' => Str::slug(strtolower('SUIS-JE REMBOURSÉ DES CONSULTATIONS'), '-'),
                'title' => 'SUIS-JE REMBOURSÉ DES CONSULTATIONS ?',
            ],
        ];

        foreach ($pages as $page) {
            if (null === Pages::where(['unique_name' => $page['unique_name']])->first()) {
                Pages::create($page);
            }
        }
    }
}
