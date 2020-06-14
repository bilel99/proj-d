<?php

use App\Models\Horaires;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schedules = [
            [
                'title' => 'En semaine',
                'content' => '20h à minuit',
            ],
            [
                'title' => 'Le samedi',
                'content' => '12h à minuit',
            ],
            [
                'title' => 'Le dimanche et les jours fériés',
                'content' => '8h à minuit',
            ],
        ];

        foreach ($schedules as $schedule) {
            if (null === Horaires::where(['title' => $schedule['title']])->first()) {
                Horaires::create($schedule);
            }
        }
    }
}
