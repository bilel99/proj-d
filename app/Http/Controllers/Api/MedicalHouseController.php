<?php

namespace App\Http\Controllers\Api;

use App\Models\MedicalHouses;
use Illuminate\Http\JsonResponse;

class MedicalHouseController extends BaseResourceController
{
    protected $model = MedicalHouses::class;
    protected $modelResource = \App\Http\Resources\MedicalHouse::class;

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
            ], 200);
        }

        return $response->setData([
            'message' => 'collection not found',
        ], 200);
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
