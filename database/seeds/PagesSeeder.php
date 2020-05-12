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
                'unique_name' => Str::slug(strtolower('about'), '-'),
                'title' => 'About',
                'content' => 'du lorem ispum',
            ],
            [
                'unique_name' => Str::slug(strtolower('Qui Sommes nous'), '-'),
                'title' => 'Qui Sommes nous ?',
                'content' => 'du lorem ispum',
            ],
            [
                'unique_name' => Str::slug(strtolower('NOS SERVICES'), '-'),
                'title' => 'NOS SERVICES',
                'content' => 'du lorem ispum',
            ],
            [
                'unique_name' => Str::slug(strtolower('COMMENT PRENDRE RENDEZ-VOUS'), '-'),
                'title' => 'COMMENT PRENDRE RENDEZ-VOUS ?',
                'content' => 'du lorem ispum',
            ],
            [
                'unique_name' => Str::slug(strtolower('TARIFS'), '-'),
                'title' => 'TARIFS',
                'content' => 'du lorem ispum',
            ],
            [
                'unique_name' => Str::slug(strtolower('OU SE SITUE LES MAISONS MÉDICALES DE GARDE'), '-'),
                'title' => 'OU SE SITUE LES MAISONS MÉDICALES DE GARDE ?',
                'content' => 'du lorem ispum',
            ],
            [
                'unique_name' => Str::slug(strtolower('contacts'), '-'),
                'title' => 'contacts',
                'content' => 'du lorem ispum',
            ],
            [
                'unique_name' => Str::slug(strtolower('NOS INFORMATIONS'), '-'),
                'title' => 'NOS INFORMATIONS',
                'content' => 'du lorem ispum',
            ],
            [
                'unique_name' => Str::slug(strtolower('baniere homepage'), '-'),
                'title' => 'baniere homepage',
                'content' => 'du lorem ispum',
            ],
            [
                'unique_name' => Str::slug(strtolower('baniere qui somme nous'), '-'),
                'title' => 'baniere qui somme nous',
                'content' => 'du lorem ispum',
            ],
            [
                'unique_name' => Str::slug(strtolower('baniere tarifs'), '-'),
                'title' => 'baniere tarifs',
                'content' => 'du lorem ispum',
            ],
        ];

        foreach ($pages as $page) {
            if (null === Pages::where(['unique_name' => $page['unique_name']])->first()) {
                Pages::create($page);
            }
        }
    }
}
