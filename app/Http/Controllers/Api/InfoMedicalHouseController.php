<?php

namespace App\Http\Controllers\Api;

use App\Models\InfosMedicalHouse;

class InfoMedicalHouseController extends BaseResourceController
{
    protected $model = InfosMedicalHouse::class;
    protected $modelResource = \App\Http\Resources\InfosMedicalHouse::class;

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
