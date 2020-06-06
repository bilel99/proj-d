<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MedicalHouses extends Model
{
    /**
     * @var string
     */
    protected $table = 'medical_houses';

    /**
     * The attributes that are mass assignables.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
        'map',
        'address',
        'compl_address',
        'phone',
        'hours'
    ];

    /**
     * @return HasMany
     */
    public function transport(): HasMany
    {
        return $this->hasMany(Transports::class, 'medical_house_id');
    }
}
