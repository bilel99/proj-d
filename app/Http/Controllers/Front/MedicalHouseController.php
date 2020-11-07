<?php

namespace App\Http\Controllers\Front;

use App\Models\Pages;
use App\Models\MedicalHouses;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class MedicalHouseController extends Controller
{
    /**
     * medicalHouse
     *
     * @return JsonResponse
     */
    public function medicalHouse(): JsonResponse
    {
        $response = new JsonResponse();

        return $response->setData([
            'data' => Pages::getPage(Pages::PAGE_MAISON_MEDICAL_GARDE),
        ]);
    }

    /**
     * Get House to medicalHouse Model
     * 
     * @param MedicalHouses $house
     * @return JsonResponse
     */
    public function getHouse(MedicalHouses $house): JsonResponse
    {
        $response = new JsonResponse();

        $medicalHouse =
            MedicalHouses
                ::with('infoMedHouse')
                ->where('id', $house->id)
                ->first();

        return $response->setData([
            'data' => $medicalHouse,
        ]);
    }
}
