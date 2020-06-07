<?php

namespace App\Http\Controllers\Api;

use App\Models\Pages;

class PageController extends BaseResourceController
{
    protected $model = Pages::class;
    protected $modelResource = \App\Http\Resources\Page::class;

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
