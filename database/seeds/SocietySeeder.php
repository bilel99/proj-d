<?php

use App\Models\Society;
use Illuminate\Database\Seeder;

class SocietySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $societies = [
            [
                'name' => 'Maison de garde',
                'email' => 'maison-de-garde@email.fr',
            ],
        ];

        foreach ($societies as $society) {
            Society::create($society);
        }
    }
}
