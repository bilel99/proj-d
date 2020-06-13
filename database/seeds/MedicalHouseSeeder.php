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
            ],
            [
                'title' => 'info 2',
                'content' => 'du lorem ipsum',
                'map' => 'google map intégration',
            ],
            [
                'title' => 'info 3',
                'content' => 'du lorem ipsum',
                'map' => 'google map intégration',
            ],
            [
                'title' => 'info 4',
                'content' => 'du lorem ipsum',
                'map' => 'google map intégration',
            ],
        ];

        foreach ($houses as $house) {
            MedicalHouses::create($house);
        }
    }
}
