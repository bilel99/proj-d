<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InfosMedicalHouse extends BasesModel
{
    /**
     * @var string
     */
    protected $table = 'infos_medical_house';

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

    /**
     * @return BelongsTo
     */
    public function medicalHouse(): BelongsTo
    {
        return $this->belongsTo(MedicalHouses::class);
    }
}
