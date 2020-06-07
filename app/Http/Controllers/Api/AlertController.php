<?php

namespace App\Http\Controllers\Api;

use App\Models\Alerts;

class AlertController extends BaseResourceController
{
    protected $model = Alerts::class;
    protected $modelResource = \App\Http\Resources\Alert::class;

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
