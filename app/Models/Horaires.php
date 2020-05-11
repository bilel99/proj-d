<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horaires extends Model
{
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
