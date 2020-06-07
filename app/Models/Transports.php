<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Passport\HasApiTokens;

class Transports extends BasesModel
{
    use HasApiTokens;

    /**
     * @var string
     */
    protected $table = 'transports';

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
