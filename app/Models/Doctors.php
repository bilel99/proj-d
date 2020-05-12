<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    public const CIVILITY_MR = 'Mr';
    public const CIVILITY_MS = 'Mme';

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
