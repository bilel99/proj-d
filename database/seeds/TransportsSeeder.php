<?php

use App\Models\Transports;
use Illuminate\Database\Seeder;

class TransportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transports = [
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

        foreach ($transports as $transport) {
            Transports::create($transport);
        }
    }
}
