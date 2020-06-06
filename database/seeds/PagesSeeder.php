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
                'title' => 'Qui Sommes nous ?',
            ],
            [
                'unique_name' => Str::slug(strtolower('NOS SERVICES'), '-'),
                'title' => 'NOS SERVICES',
            ],
            [
                'unique_name' => Str::slug(strtolower('COMMENT PRENDRE RENDEZ-VOUS'), '-'),
                'title' => 'COMMENT PRENDRE RENDEZ-VOUS ?',
            ],
            [
                'unique_name' => Str::slug(strtolower('TARIFS'), '-'),
                'title' => 'Tarifs secteur 1 à titre indicatif au 1er Janvier 2020',
            ],
            [
                'unique_name' => Str::slug(strtolower('OU SE SITUE LES MAISONS MÉDICALES DE GARDE'), '-'),
                'title' => 'OU SE SITUE LES MAISONS MÉDICALES DE GARDE ?',
                'content' => 'du lorem ispum',
            ],
            [
                'unique_name' => Str::slug(strtolower('contacts'), '-'),
                'title' => 'contacts',
            ],
            [
                'unique_name' => Str::slug(strtolower('NOS INFORMATIONS'), '-'),
                'title' => 'NOS INFORMATIONS',
            ],
            [
                'unique_name' => Str::slug(strtolower('baniere homepage'), '-'),
                'title' => 'baniere homepage',
            ],
            [
                'unique_name' => Str::slug(strtolower('baniere qui somme nous'), '-'),
                'title' => 'baniere qui somme nous',
            ],
            [
                'unique_name' => Str::slug(strtolower('baniere tarifs'), '-'),
                'title' => 'baniere tarifs',
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