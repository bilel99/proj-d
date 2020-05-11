<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pages extends Model
{
    /**
     * The attributes that are mass assignables.
     *
     * @var array
     */
    protected $fillable = [
        'unique_name',
        'title',
        'content'
    ];

    public function alert(): BelongsTo
    {
        return $this->belongsTo(Alerts::class);
    }
}
