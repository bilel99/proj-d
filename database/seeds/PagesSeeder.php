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
                'unique_name' => Str::slug(strtolower('qui-sommes-nous'), '-'),
                'title' => 'Qui sommes-nous ?',
                'content' => 'Les Docteurs de Garde®&nbsp;sont des acteurs majeurs de la prise en charge médicale urgente en partenariat avec les Hôpitaux publics. Ils assurent la prise en charge des différentes urgences médicales et des soins non programmés, des urgences non vitales et la permanence des soins en Ile de France ...'
            ],
            [
                'unique_name' => Str::slug(strtolower('nos-services'), '-'),
                'title' => 'Nos services',
                'content' => 'Les Docteurs de Garde®&nbsp;sont des acteurs majeurs de la prise en charge médicale urgente en partenariat avec les Hôpitaux publics. Ils assurent la prise en charge des différentes urgences médicales et des soins non programmés, des urgences non vitales et la permanence des soins en Ile de France ...'
            ],
            [
                'unique_name' => Str::slug(strtolower('comment-prendre-rendez-vous'), '-'),
                'title' => 'Comment prendre rendez-vous ?',
                'content' => 'Les Docteurs de Garde®&nbsp;sont des acteurs majeurs de la prise en charge médicale urgente en partenariat avec les Hôpitaux publics. Ils assurent la prise en charge des différentes urgences médicales et des soins non programmés, des urgences non vitales et la permanence des soins en Ile de France ...'
            ],
            [
                'unique_name' => Str::slug(strtolower('tarifs'), '-'),
                'title' => 'Tarifs secteur 1 à titre indicatif au 1er Janvier 2020',
                'content' => 'Les Docteurs de Garde®&nbsp;sont des acteurs majeurs de la prise en charge médicale urgente en partenariat avec les Hôpitaux publics. Ils assurent la prise en charge des différentes urgences médicales et des soins non programmés, des urgences non vitales et la permanence des soins en Ile de France ...'
            ],
            [
                'unique_name' => Str::slug(strtolower('ou-se-situe-les-maisons-medicales-de-garde'), '-'),
                'title' => 'Ou se situe les Maisons médicales de garde ?',
                'content' => 'Les Docteurs de Garde®&nbsp;sont des acteurs majeurs de la prise en charge médicale urgente en partenariat avec les Hôpitaux publics. Ils assurent la prise en charge des différentes urgences médicales et des soins non programmés, des urgences non vitales et la permanence des soins en Ile de France ...'
            ],
            [
                'unique_name' => Str::slug(strtolower('contacts'), '-'),
                'title' => 'Contact',
                'content' => 'Les Docteurs de Garde®&nbsp;sont des acteurs majeurs de la prise en charge médicale urgente en partenariat avec les Hôpitaux publics. Ils assurent la prise en charge des différentes urgences médicales et des soins non programmés, des urgences non vitales et la permanence des soins en Ile de France ...'
            ],
            [
                'unique_name' => Str::slug(strtolower('nos-informations'), '-'),
                'title' => 'Nos informations',
                'content' => 'Les Docteurs de Garde®&nbsp;sont des acteurs majeurs de la prise en charge médicale urgente en partenariat avec les Hôpitaux publics. Ils assurent la prise en charge des différentes urgences médicales et des soins non programmés, des urgences non vitales et la permanence des soins en Ile de France ...'
            ],
            [
                'unique_name' => Str::slug(strtolower('baniere-homepage'), '-'),
                'title' => 'MAISON MÉDICALE DE GARDE SEINE ET MARNE',
                'content' => 'Les Docteurs de Garde® sont des acteurs majeurs de la prise en charge médicale urgente en partenariat avec les Hôpitaux publics. Ils assurent la prise en charge des différentes urgences médicales et des soins non programmés, des urgences non vitales et la permanence des soins en Ile de France.',
            ],
            [
                'unique_name' => Str::slug(strtolower('baniere-qui-somme-nous'), '-'),
                'title' => 'MAISON MÉDICALE DE GARDE SEINE ET MARNE',
                'content' => 'Les Docteurs de Garde® sont des acteurs majeurs de la prise en charge médicale urgente en partenariat avec les Hôpitaux publics. Ils assurent la prise en charge des différentes urgences médicales et des soins non programmés, des urgences non vitales et la permanence des soins en Ile de France.',
            ],
            [
                'unique_name' => Str::slug(strtolower('baniere-tarifs'), '-'),
                'title' => 'MAISON MÉDICALE DE GARDE SEINE ET MARNE',
                'content' => 'Les Docteurs de Garde® sont des acteurs majeurs de la prise en charge médicale urgente en partenariat avec les Hôpitaux publics. Ils assurent la prise en charge des différentes urgences médicales et des soins non programmés, des urgences non vitales et la permanence des soins en Ile de France.',
            ],
            [
                'unique_name' => Str::slug(strtolower('baniere-contact'), '-'),
                'title' => 'MAISON MÉDICALE DE GARDE SEINE ET MARNE',
                'content' => 'Les Docteurs de Garde® sont des acteurs majeurs de la prise en charge médicale urgente en partenariat avec les Hôpitaux publics. Ils assurent la prise en charge des différentes urgences médicales et des soins non programmés, des urgences non vitales et la permanence des soins en Ile de France.',
            ],
            [
                'unique_name' => Str::slug(strtolower('ce-que-les-docteurs-de-garde-ne-font-pas'), '-'),
                'title' => 'Ce que les Docteurs de Garde® ne font pas :',
                'content' => 'Les Docteurs de Garde®&nbsp;sont des acteurs majeurs de la prise en charge médicale urgente en partenariat avec les Hôpitaux publics. Ils assurent la prise en charge des différentes urgences médicales et des soins non programmés, des urgences non vitales et la permanence des soins en Ile de France ...'
            ],
            [
                'unique_name' => Str::slug(strtolower('un-rendez-vous-dans-quel-delai'), '-'),
                'title' => 'Un rendez-vous dans quel délai ?',
                'content' => 'Les Docteurs de Garde®&nbsp;sont des acteurs majeurs de la prise en charge médicale urgente en partenariat avec les Hôpitaux publics. Ils assurent la prise en charge des différentes urgences médicales et des soins non programmés, des urgences non vitales et la permanence des soins en Ile de France ...'
            ],
            [
                'unique_name' => Str::slug(strtolower('suis-je-rembourse-des-consultations'), '-'),
                'title' => 'Suis-je remboursé des consultations ?',
                'content' => 'Les Docteurs de Garde®&nbsp;sont des acteurs majeurs de la prise en charge médicale urgente en partenariat avec les Hôpitaux publics. Ils assurent la prise en charge des différentes urgences médicales et des soins non programmés, des urgences non vitales et la permanence des soins en Ile de France ...'
            ],
        ];

        foreach ($pages as $page) {
            if (null === Pages::where(['unique_name' => $page['unique_name']])->first()) {
                Pages::create($page);
            }
        }
    }
}
