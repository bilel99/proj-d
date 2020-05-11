<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Services extends Model
{
    /**
     * The attributes that are mass assignables.
     *
     * @var array
     */
    protected $fillable = [
        'page_id',
        'icon',
        'title',
        'content'
    ];

    public function page(): HasMany
    {
        return $this->hasMany(Pages::class);
    }
}
