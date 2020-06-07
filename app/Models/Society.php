<?php

namespace App\Models;

use Laravel\Passport\HasApiTokens;

class Society extends BasesModel
{
    use HasApiTokens;

    /**
     * @var string
     */
    protected $table = 'society';

    /**
     * The attributes that are mass assignables.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email'
    ];
}
