<?php

use App\Models\Doctors;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctors = [
            [
                'name' => 'Docteur1',
                'firstname' => 'Docteur1',
                'email' => 'docteur1@gmail.com',
                'civility' => Doctors::CIVILITY_MS,
            ],
            [
                'name' => 'Docteur2',
                'firstname' => 'Docteur2',
                'email' => 'docteur2@gmail.com',
                'civility' => Doctors::CIVILITY_MR,
            ],
            [
                'name' => 'Docteur3',
                'firstname' => 'Docteur3',
                'email' => 'docteur3@gmail.com',
                'civility' => Doctors::CIVILITY_MR,
            ],
            [
                'name' => 'Docteur4',
                'firstname' => 'Docteur4',
                'email' => 'docteur4@gmail.com',
                'civility' => Doctors::CIVILITY_MS,
            ],
        ];

        foreach ($doctors as $doctor) {
            if (null === Doctors::where(['email' => $doctor['email']])->first()) {
                Doctors::create($doctor);
            }
        }
    }
}
