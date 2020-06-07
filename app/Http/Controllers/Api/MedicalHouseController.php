<?php

namespace App\Http\Controllers\Api;

use App\Models\MedicalHouses;

class MedicalHouseController extends BaseResourceController
{
    protected $model = MedicalHouses::class;
    protected $modelResource = \App\Http\Resources\MedicalHouse::class;

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
