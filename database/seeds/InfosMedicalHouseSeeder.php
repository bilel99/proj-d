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
                'title' => 'info 1',
                'icon' => 'fa fa-plus',
                'infos' => 'du lorem ipsum',
            ],
            [
                'title' => 'info 2',
                'icon' => 'fa fa-plus',
                'infos' => 'du lorem ipsum',
            ],
            [
                'title' => 'info 3',
                'icon' => 'fa fa-plus',
                'infos' => 'du lorem ipsum',
            ],
            [
                'title' => 'info 4',
                'icon' => 'fa fa-plus',
                'infos' => 'du lorem ipsum',
            ],
        ];

        foreach ($infos as $info) {
            InfosMedicalHouse::create($info);
        }
    }
}
