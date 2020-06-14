<?php

use App\Models\Informations;
use Illuminate\Database\Seeder;

class InformationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $infos = [
            [
                'alert_id' => 1,
                'title' => 'Quels sont les horaires d’ouverture ?',
                'content' => 'Merci de vous présenter au niveau de l’accueil des services d’urgence de Meaux ou Jossigny 20 minutes avant votre Rendez-vous, afin d’être orienté vers la Maison Médicale de Garde ...',
            ],
            [
                'alert_id' => 1,
                'title' => 'Avant la consultation :',
                'content' => 'Merci de vous présenter au niveau de l’accueil des services d’urgence de Meaux ou Jossigny 20 minutes avant votre Rendez-vous, afin d’être orienté vers la Maison Médicale de Garde ...',
            ],
            [
                'alert_id' => 1,
                'title' => 'Après la consultation :',
                'content' => 'Merci de conserver tous vos documents, aucun duplicata ne pourra être fournis ...',
            ],
        ];

        foreach ($infos as $info) {
            if (null === Informations::where(['title' => $info['title']])->first()) {
                Informations::create($info);
            }
        }
    }
}
