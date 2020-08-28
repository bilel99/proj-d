<?php

namespace App\Models;

class Doctors extends BasesModel
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

    /**
     * @param string $name
     * @param string $firstname
     * @return bool
     */
    public static function isFullNameDoctorExist(string $name, string $firstname): bool
    {
        return static::where(['name' => $name, 'firstname' => $firstname])->exists();
    }

    /**
     * @param string $name
     * @param string $firstname
     * @return mixed
     */
    public static function getFullNameDoctor(string $name, string $firstname)
    {
        return static::where(['name' => $name, 'firstname' => $firstname])->first();
    }
}
