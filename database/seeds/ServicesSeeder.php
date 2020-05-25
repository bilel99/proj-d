<?php

use App\Models\Services;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'page_id' => 2,
                'title' => 'Titre Service 1',
                'content' => 'du lorem ipsum',
                'icon' => 'fas fa-plus',
            ],
            [
                'page_id' => 2,
                'title' => 'Titre Service 2',
                'content' => 'du lorem ipsum',
                'icon' => 'fas fa-plus',
            ],
            [
                'page_id' => 2,
                'title' => 'Titre Service 3',
                'content' => 'du lorem ipsum',
                'icon' => 'fas fa-plus',
            ],
            [
                'page_id' => 2,
                'title' => 'Titre Service 4',
                'content' => 'du lorem ipsum',
                'icon' => 'fas fa-plus',
            ],
        ];

        foreach ($services as $service) {
            Services::create($service);
        }
    }
}
