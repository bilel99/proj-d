<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
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
