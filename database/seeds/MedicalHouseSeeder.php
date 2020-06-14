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
                'page_id' => 5,
                'title' => 'Site de Marne-la-Vallée',
                'content' => '<p><span style="color: rgb(108, 117, 125);">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam asperiores, assumenda beatae cum dolore itaque laboriosam mollitia non numquam officia pariatur, quam quas quis repellat sapiente sequi sint unde, veritatis.</span></p>',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.4386323324015!2d2.7665375514465294!3d48.849845609160475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e61cd45d771c2d%3A0xa6a3a7e5978a15d6!2s2%20Cours%20de%20la%20Gondoire%2C%2077600%20Jossigny!5e0!3m2!1sfr!2sfr!4v1588950720201!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
            ],
            [
                'page_id' => 5,
                'title' => 'Site de Meaux',
                'content' => '<p><span style="color: rgb(108, 117, 125);">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam asperiores, assumenda beatae cum dolore itaque laboriosam mollitia non numquam officia pariatur, quam quas quis repellat sapiente sequi sint unde, veritatis.</span></p>',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.4386323324015!2d2.7665375514465294!3d48.849845609160475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e61cd45d771c2d%3A0xa6a3a7e5978a15d6!2s2%20Cours%20de%20la%20Gondoire%2C%2077600%20Jossigny!5e0!3m2!1sfr!2sfr!4v1588950720201!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
            ],
        ];

        foreach ($houses as $house) {
            if (null === MedicalHouses::where(['title' => $house['title']])->first()) {
                MedicalHouses::create($house);
            }
        }
    }
}
