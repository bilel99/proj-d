<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    /**
     * The attributes that are mass assignables.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'firstname',
        'civility',
        'email'
    ];
}
