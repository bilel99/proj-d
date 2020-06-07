<?php

namespace App\Models;

use Laravel\Passport\HasApiTokens;

class Horaires extends BasesModel
{
    use HasApiTokens;

    /**
     * The attributes that are mass assignables.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content'
    ];
}
