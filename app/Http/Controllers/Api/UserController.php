<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends BaseResourceController
{
    protected $model = User::class;
    protected $modelResource = \App\Http\Resources\User::class;

    /**
     * Save a hashed password
     */
    protected function preSaveStore()
    {
        if (isset($this->requestDatas['password'])) {
            $this->requestDatas['password'] = Hash::make($this->requestDatas['password']);
        }
    }

    /**
     * Save a hashed password
     */
    protected function preSaveUpdate()
    {
        $this->preSaveStore();
    }
}
