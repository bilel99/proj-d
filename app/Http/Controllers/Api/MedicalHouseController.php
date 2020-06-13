<?php

namespace App\Http\Controllers\Api;

use App\Models\MedicalHouses;
use Illuminate\Http\JsonResponse;

class MedicalHouseController extends BaseResourceController
{
    protected $model = MedicalHouses::class;
    protected $modelResource = \App\Http\Resources\MedicalHouse::class;

    /**
     * @param MedicalHouses $house
     * @return JsonResponse|\Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getRelations(MedicalHouses $house)
    {
        $response = new JsonResponse();

        $house = MedicalHouses
            ::with('infoMedHouse')
            ->where('id', $house->id)
            ->first();

        if (!empty($house)) {
            return $response->setData([
                'data' => $house->toArray(),
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
