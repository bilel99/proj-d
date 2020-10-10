<?php

namespace App\Models;

use App\Models\BasesModel;

class SocialNetwotk extends BasesModel
{
    /**
     * The attributes that are mass assignables.
     *
     * @var array
     */
    protected $fillable = [
        'link',
        'title',
        'icon',
    ];
}
