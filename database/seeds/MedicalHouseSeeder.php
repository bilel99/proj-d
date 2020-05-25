<?php

use App\Models\MedicalHouses;
use Illuminate\Database\Seeder;

class MedicalHouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $houses = [
            [
                'title' => 'info 1',
                'content' => 'du lorem ipsum',
                'map' => 'google map intégration',
                'address' => '7 rue des ville',
                'compl_address' => 'Paris 75001',
                'phone' => '0123456789',
                'hours' => '9:00 à 18:00',
            ],
            [
                'title' => 'info 2',
                'content' => 'du lorem ipsum',
                'map' => 'google map intégration',
                'address' => '7 rue des ville',
                'compl_address' => 'Paris 75001',
                'phone' => '0123456789',
                'hours' => '9:00 à 18:00',
            ],
            [
                'title' => 'info 3',
                'content' => 'du lorem ipsum',
                'map' => 'google map intégration',
                'address' => '7 rue des ville',
                'compl_address' => 'Paris 75001',
                'phone' => '0123456789',
                'hours' => '9:00 à 18:00',
            ],
            [
                'title' => 'info 4',
                'content' => 'du lorem ipsum',
                'map' => 'google map intégration',
                'address' => '7 rue des ville',
                'compl_address' => 'Paris 75001',
                'phone' => '0123456789',
                'hours' => '9:00 à 18:00',
            ],
        ];

        foreach ($houses as $house) {
            MedicalHouses::create($house);
        }
    }
}
