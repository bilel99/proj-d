<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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

    /**
     * @return BelongsToMany
     */
    public function transports(): BelongsToMany
    {
        return $this->belongsToMany(
            Transports::class,
            'medical_houses_transports',
            'medical_house_id',
            'transport_id')
            ->using(MedicalHouseTransport::class)
            ->withTimestamps();
    }
}
