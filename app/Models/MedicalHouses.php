<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MedicalHouses extends BasesModel
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
     * @return BelongsTo
     */
    public function page(): BelongsTo
    {
        return $this->BelongsTo(Pages::class);
    }

    /**
     * @return HasMany
     */
    public function infoMedHouse(): HasMany
    {
        return $this->hasMany(InfosMedicalHouse::class, 'medical_house_id');
    }
}
