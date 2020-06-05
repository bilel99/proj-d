<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    public const CIVILITY_MR = 'Mr';
    public const CIVILITY_MS = 'Mme';

    /**
     * The attributes that are mass assignables.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'firstname',
        'civility',
        'email'
    ];

    /**
     * @return array
     */
    public static function civilityOptions(): array
    {
        return [
            static::CIVILITY_MR => __('globals.attributes.civility.mr_label'),
            static::CIVILITY_MS => __('globals.attributes.civility.ms_label'),
        ];
    }
}
