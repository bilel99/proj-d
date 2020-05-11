<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Informations extends Model
{
    /**
     * The attributes that are mass assignables.
     *
     * @var array
     */
    protected $fillable = [
        'alert_id',
        'title',
        'content'
    ];

    public function alert(): HasOne
    {
        return $this->hasOne(Alerts::class);
    }
}
