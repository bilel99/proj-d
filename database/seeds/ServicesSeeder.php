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
                'title' => 'Premium Healthcare',
                'content' => 'du lorem ipsum',
                'icon' => 'fas fa-stethoscope',
            ],
            [
                'page_id' => 2,
                'title' => 'Emergency Services',
                'content' => 'du lorem ipsum',
                'icon' => 'fas fa-ambulance',
            ],
            [
                'page_id' => 2,
                'title' => 'Medical Counseling',
                'content' => 'du lorem ipsum',
                'icon' => 'fas fa-user-md',
            ],
            [
                'page_id' => 2,
                'title' => 'Premium Healthcare',
                'content' => 'du lorem ipsum',
                'icon' => 'fas fa-medkit',
            ],
        ];

        foreach ($services as $service) {
            if (null === Services::where(['title' => $service['title']])->first()) {
                Services::create($service);
            }
        }
    }
}
