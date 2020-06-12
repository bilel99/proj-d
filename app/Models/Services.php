<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Passport\HasApiTokens;

class Services extends BasesModel
{
    use HasApiTokens;

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

    /**
     * @return BelongsTo
     */
    public function page(): BelongsTo
    {
        return $this->BelongsTo(Pages::class);
    }
}
