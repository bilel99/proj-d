<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'civility' => 'Mr',
                'name' => 'Bilel',
                'firstname' => 'Bekkouche',
                'email' => 'bilel.bekkouche@gmail.com',
                'password' => Hash::make('bilel999'),
                'status' => User::STATUS_ACTIF,
            ],
            [
                'civility' => 'Mr',
                'name' => 'Amin',
                'firstname' => 'Ddd',
                'email' => 'amin.d@gmail.com',
                'password' => Hash::make('amin999'),
                'status' => User::STATUS_ACTIF,
            ],
        ];

        foreach ($users as $user) {
            if (null === User::where(['email' => $user['email']])->first()) {
                User::create($user);
            }
        }
    }
}
