<?php

use App\Models\ApiConsumer;
use Illuminate\Database\Seeder;

class ApiConsumersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * How to generate token:
     * Hash::make(string);
     * the hash is bcrypt algorithm
     *
     * @return void
     */
    public function run()
    {
        $key = 'docteurs_garde_website';
        if (null === ApiConsumer::where(['name' => $key])->first()) {
            ApiConsumer::create([
                'name' => $key,
                'api_token' => '$2y$10$/i9/jW2Ux0oWjF3VH4VkuOMH1i0TMsSJP.sGFpoaR.4/b/1Jkd36e',
            ]);
        }
    }
}
