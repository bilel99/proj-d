<?php

use App\Models\Prices;
use Illuminate\Database\Seeder;

class PricesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prices = [
            [
                'page_id' => 4,
                'title' => 'Consultations du soir de 20h à minuit:',
                'content_row_1' => 'C + CRN = 67.50 € - Tiers Payant = 20.25 €*',
                'content_row_2' => 'C + MEG + CRN = 72.50 € - Tiers Payant = 21.75 €*',
            ],
            [
                'page_id' => 4,
                'title' => 'Consultations des Samedis de 12h à 20h:',
                'content_row_1' => 'C + CRS = 51.50 € - Tiers Payant = 15.45 €*',
                'content_row_2' => 'C + MEG + CRS = 56.50 € - Tiers Payant = 16.95 €*',
            ],
            [
                'page_id' => 4,
                'title' => 'Consultations des Dimanches et Jours Fériés de 8h à 20h:',
                'content_row_1' => 'C + CRD = 51.50 € - Tiers Payant = 15.45 €*',
                'content_row_2' => 'C + MEG + CRD = 56.50 € - Tiers Payant = 16.95 €*',
            ],
        ];

        foreach ($prices as $price) {
            if (null === Prices::where(['title' => $price['title']])->first()) {
                Prices::create($price);
            }
        }
    }
}
