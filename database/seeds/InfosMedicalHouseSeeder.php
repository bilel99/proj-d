<?php

use App\Models\InfosMedicalHouse;
use Illuminate\Database\Seeder;

class InfosMedicalHouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $infos = [
            [
                'medical_house_id' => 1,
                'title' => 'ADULTE PEDIATRIQUE DE JOSSIGNY - Grand Hôpital de l\'Est',
                'icon' => 'fas fa-home',
                'infos' => '2-4 cours de la Gondoire 77600 Jossigny',
            ],
            [
                'medical_house_id' => 1,
                'title' => '+33 1 64 77 64 77',
                'icon' => 'fas fa-mobile',
                'infos' => 'Ouvert 7j/7 24/24h',
            ],
            [
                'medical_house_id' => 1,
                'title' => 'BUS',
                'icon' => 'fas fa-bus',
                'infos' => 'Lignes 22,42 et 46 - arrêt centre hospitalier',
            ],
            [
                'medical_house_id' => 1,
                'title' => 'RER A',
                'icon' => 'fas fa-subway',
                'infos' => 'Station Val d\'Europe',
            ],
        ];

        foreach ($infos as $info) {
            if (null === InfosMedicalHouse::where(['title' => $info['title']])->first()) {
                InfosMedicalHouse::create($info);
            }
        }
    }
}
