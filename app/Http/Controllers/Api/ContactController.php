<?php

namespace App\Http\Controllers\Api;

use App\Models\Contacts;

class ContactController extends BaseResourceController
{
    protected $model = Contacts::class;
    protected $modelResource = \App\Http\Resources\Contact::class;

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
