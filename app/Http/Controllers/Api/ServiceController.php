<?php

namespace App\Http\Controllers\Api;

use App\Models\Services;

class ServiceController extends BaseResourceController
{
    protected $model = Services::class;
    protected $modelResource = \App\Http\Resources\Service::class;

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
