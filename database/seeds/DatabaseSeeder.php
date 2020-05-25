<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SocietySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AlertSeeder::class);
        $this->call(PagesSeeder::class);
        $this->call(ScheduleSeeder::class);
        $this->call(DoctorSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(ServicesSeeder::class);
        $this->call(InformationsSeeder::class);
        $this->call(TransportsSeeder::class);
        $this->call(MedicalHouseSeeder::class);
    }
}
