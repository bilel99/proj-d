<?php

use App\Models\Alerts;
use Illuminate\Database\Seeder;

class AlertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alerts = [
            [
                'page_id' => null,
                'title' => 'Titre alert',
                'content' => 'du lorem ipsum',
                'icon' => 'fas fa-plus',
                'levels' => 1,
                'types' => 1,
            ],
            [
                'page_id' => null,
                'title' => 'Titre alert2',
                'content' => 'du lorem ipsum',
                'icon' => 'fas fa-plus',
                'levels' => 2,
                'types' => 2,
            ],
            [
                'page_id' => null,
                'title' => 'Titre alert3',
                'content' => 'du lorem ipsum',
                'icon' => 'fas fa-plus',
                'levels' => 3,
                'types' => 3,
            ],
            [
                'page_id' => null,
                'title' => 'Titre alert4',
                'content' => 'du lorem ipsum',
                'icon' => 'fas fa-plus',
                'levels' => 1,
                'types' => 4,
            ],
        ];

        foreach ($alerts as $alert) {
            Alerts::create($alert);
        }
    }
}
