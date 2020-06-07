<?php

namespace App\Http\Controllers\Api;

use App\Models\Informations;

class InformationController extends BaseResourceController
{
    protected $model = Informations::class;
    protected $modelResource = \App\Http\Resources\Information::class;

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
