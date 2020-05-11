<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MedicalHouses extends Model
{
    /**
     * The attributes that are mass assignables.
     *
     * @var array
     */
    protected $fillable = [
        'page_id',
        'content',
        'map',
        'address',
        'compl_address',
        'phone',
        'hours'
    ];

    public function page(): HasMany
    {
        return $this->hasMany(Pages::class);
    }
}
