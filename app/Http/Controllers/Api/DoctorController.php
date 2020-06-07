<?php

namespace App\Http\Controllers\Api;

use App\Models\Doctors;

class DoctorController extends BaseResourceController
{
    protected $model = Doctors::class;
    protected $modelResource = \App\Http\Resources\Doctor::class;

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
