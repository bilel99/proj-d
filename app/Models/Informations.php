<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Passport\HasApiTokens;

class Informations extends BasesModel
{
    use HasApiTokens;

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

    /**
     * @return BelongsTo
     */
    public function alert(): BelongsTo
    {
        return $this->belongsTo(Alerts::class);
    }
}
