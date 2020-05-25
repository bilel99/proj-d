<?php

use App\Models\Informations;
use Illuminate\Database\Seeder;

class InformationsSeeder extends Seeder
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
                'alert_id' => 1,
                'title' => 'info 1',
                'content' => 'du lorem ipsum',
            ],
            [
                'alert_id' => 1,
                'title' => 'info 2',
                'content' => 'du lorem ipsum',
            ],
            [
                'alert_id' => 1,
                'title' => 'info 3',
                'content' => 'du lorem ipsum',
            ],
            [
                'alert_id' => 1,
                'title' => 'info 4',
                'content' => 'du lorem ipsum',
            ],
        ];

        foreach ($infos as $info) {
            Informations::create($info);
        }
    }
}
