<?php

use App\Models\Alerts;
use Illuminate\Database\Seeder;

class AlertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alerts = [
            [
                'title' => 'Information nos centres médicaux',
                'content' => 'Nos centres médicaux de consultation d’urgence et de permanence de soins vous accueillent, sur rendez-vous uniquement.',
                'icon' => 'fas fa-plus',
                'levels' => 1,
                'types' => 1,
            ],
            [
                'title' => 'Attention information importante',
                'content' => 'aucun duplicata ne pourra être fournis.',
                'icon' => 'fas fa-plus',
                'levels' => 1,
                'types' => 1,
            ],
            [
                'title' => 'Information comment prendre rendez-vous',
                'content' => '<p>EN VOUS PRESENTANT DIRECTEMENT AUX URGENCES VOUS RISQUEZ DE NE PAS AVOIR DE RENDEZ-VOUS DISPONIBLE</p><p>RESERVEZ VOTRE RENDEZ-VOUS DE PREFERENCE AVEC LE 15.</p><p>Si votre état de santé s’aggrave avant votre rendez-vous avec le médecin : n’hésitez pas à rappeler le centre d’appels pour le signaler. En cas d’urgence grave contactez le SAMU (15).</p>',
                'icon' => 'fas fa-plus',
                'levels' => 1,
                'types' => 1,
            ],
            [
                'title' => 'Information ce que les docteur de garde ne font pas',
                'content' => 'AUCUNE ANTI-DATATION NE POURRA ETRE EFFECTUEE (NI AVANT – NI APRES)',
                'icon' => 'fas fa-plus',
                'levels' => 1,
                'types' => 1,
            ],
            [
                'title' => 'Information demande de contact',
                'content' => 'EN AUCUN CAS UN CONSEIL MEDICAL OU AVIS NE POURRA ETRE DONNE, MERCI DE CONTACTER LE 15 POUR PRENDRE RDV OU POUR AVIS',
                'icon' => 'fas fa-plus',
                'levels' => 1,
                'types' => 1,
            ],
            [
                'title' => 'Attention Tarifs',
                'content' => 'Si droits à la sécurité sociale ouverts et si carte vitale à jour.',
                'icon' => 'fas fa-asterisk',
                'levels' => 1,
                'types' => 1,
            ],
            [
                'title' => 'Information Tarifs',
                'content' => 'Vous ne payez que le Tiers payant si droits à jours.',
                'icon' => 'fas fa-plus',
                'levels' => 1,
                'types' => 1,
            ],
            [
                'title' => 'Information Tarifs tiers-payant',
                'content' => 'Le Tiers-Payant est pratiqué systématiquement. De ce fait, aucun payement ne sera demandé au patient avec une CMU/ALD/AME à jour.',
                'icon' => 'fas fa-plus',
                'levels' => 1,
                'types' => 1,
            ],
            [
                'title' => 'Attention facture',
                'content' => 'LA FACTURE SERA REALISEE PAR LE MEDECIN UNIQUEMENT A LA DEMANDE DU PATIENT. AUCUNE COPIE NE POURRA ETRE FAITE.',
                'icon' => 'fas fa-exclamation-triangle',
                'levels' => 1,
                'types' => 1,
            ],
        ];

        foreach ($alerts as $alert) {
            if (null === Alerts::where(['title' => $alert['title']])->first()) {
                Alerts::create($alert);
            }
        }
    }
}
