<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prices extends BasesModel
{
    /**
     * The attributes that are mass assignables.
     *
     * @var array
     */
    protected $fillable = [
        'page_id',
        'title',
        'content_row_1',
        'content_row_2'
    ];

    /**
     * @return BelongsTo
     */
    public function page(): BelongsTo
    {
        return $this->BelongsTo(Pages::class);
    }
}
