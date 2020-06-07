<?php

namespace App\Models;

class Society extends BasesModel
{
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
