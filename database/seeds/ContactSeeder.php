<?php

use App\Models\Contacts;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacts = [
            [
                'doctor_id' => 1,
                'objet_demande' => Contacts::OBJECT_DEMANDE_1,
                'civility' => Contacts::CIVILITY_MR,
                'name' => 'patrick',
                'firstname' => 'rol',
                'address' => '9 rue des chalets',
                'postal_code' => '92700',
                'email' => 'bilel.bekkouche@hotmail.fr',
                'phone' => '0147852369',
                'date_consultation' => '2018-02-01',
                'objet_demande_doctor' => 'c est quoi ce champ ?',
                'precisions' => 'du lorem ispum',
            ],
            [
                'doctor_id' => 2,
                'objet_demande' => Contacts::OBJECT_DEMANDE_1,
                'civility' => Contacts::CIVILITY_MR,
                'name' => 'patrick',
                'firstname' => 'rol',
                'address' => '7 rue des chalets',
                'postal_code' => '92700',
                'email' => 'mathieux@hotmail.fr',
                'phone' => '0147852369',
                'date_consultation' => '2018-02-01',
                'objet_demande_doctor' => 'c est quoi ce champ ?',
                'precisions' => 'du lorem ispum',
            ],
            [
                'doctor_id' => 1,
                'objet_demande' => Contacts::OBJECT_DEMANDE_1,
                'civility' => Contacts::CIVILITY_MR,
                'name' => 'patrick',
                'firstname' => 'rol',
                'address' => '7 rue des chalets',
                'postal_code' => '92700',
                'email' => 'troisieme@hotmail.fr',
                'phone' => '0147852369',
                'date_consultation' => '2018-02-01',
                'objet_demande_doctor' => 'c est quoi ce champ ?',
                'precisions' => 'du lorem ispum',
            ],
        ];

        foreach ($contacts as $contact) {
            if (null === Contacts::where(['email' => $contact['email']])->first()) {
                Contacts::create($contact);
            }
        }
    }
}
