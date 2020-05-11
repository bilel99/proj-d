<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transports extends Model
{
    /**
     * The attributes that are mass assignables.
     *
     * @var array
     */
    protected $fillable = [
        'medical_house_id',
        'icon',
        'title',
        'infos'
    ];

    public function medicalHouse(): HasOne
    {
        return $this->hasOne(MedicalHouses::class);
    }
}
