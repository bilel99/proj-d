<?php

namespace App\Http\Controllers\Api;

use App\Models\Horaires;

class HoraireController extends BaseResourceController
{
    protected $model = Horaires::class;
    protected $modelResource = \App\Http\Resources\Horaire::class;

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
