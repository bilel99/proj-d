<?php

namespace App\Http\Controllers\Api;

use App\Models\Prices;
use Illuminate\Http\JsonResponse;

class PriceController extends BaseResourceController
{
    protected $model = Prices::class;
    protected $modelResource = \App\Http\Resources\Price::class;

    /**
     * @param Prices $price
     * @return JsonResponse|\Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getRelations(Prices $price)
    {
        $response = new JsonResponse();

        $price = Prices
            ::with('page')
            ->where('id', $price->id)
            ->first();

        if (!empty($price)) {
            return $response->setData([
                'data' => $price->toArray(),
            ]);
        }

        return $response->setData([
            'message' => 'collection not found',
        ]);
    }

    /**
     * Save a hashed password
     */
    protected function preSaveStore()
    {
        //
    }

    /**
     * Save a hashed password
     */
    protected function preSaveUpdate()
    {
        $this->preSaveStore();
    }
}
