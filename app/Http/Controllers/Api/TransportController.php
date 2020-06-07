<?php

namespace App\Http\Controllers\Api;

use App\Models\Transports;

class TransportController extends BaseResourceController
{
    protected $model = Transports::class;
    protected $modelResource = \App\Http\Resources\Transport::class;

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
