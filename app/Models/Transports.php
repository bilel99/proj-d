<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transports extends Model
{
    /**
     * The attributes that are mass assignables.
     *
     * @var array
     */
    protected $fillable = [
        'icon',
        'title',
        'infos'
    ];

    /**
     * @return BelongsToMany
     */
    public function medicalHouse(): BelongsToMany
    {
        return $this->belongsToMany(
            MedicalHouses::class,
            'medical_houses_transports',
            'transport_id',
            'medical_house_id')
            ->using(MedicalHouseTransport::class)
            ->withTimestamps();
    }
}
