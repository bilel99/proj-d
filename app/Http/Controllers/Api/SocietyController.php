<?php

namespace App\Http\Controllers\Api;

use App\Models\Society;

class SocietyController extends BaseResourceController
{
    protected $model = Society::class;
    protected $modelResource = \App\Http\Resources\Society::class;

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
