<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    /**
     * @return HasMany
     */
    public function alert(): HasMany
    {
        return $this->hasMany(Alerts::class, 'page_id');
    }
}
