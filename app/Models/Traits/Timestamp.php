<?php

namespace App\Models\Traits;

use Illuminate\Support\Carbon;

trait Timestamp
{
    /**
     * @return false|string
     */
    public function getCreatedAtAttribute(): string
    {
        return Carbon::parse($this->attributes['created_at'])->format('d/m/Y H\Hi');
    }

    /**
     * @return false|string
     */
    public function getUpdatedAtAttribute(): string
    {
        return Carbon::parse($this->attributes['updated_at'])->format('d/m/Y H\Hi');
    }
}
