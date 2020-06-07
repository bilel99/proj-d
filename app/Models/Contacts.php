<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contacts extends BasesModel
{
    public const OBJECT_DEMANDE_1 = 'Contacter le médecin qui vous a consulté';
    public const OBJECT_DEMANDE_2 = 'Contacter la société docteur de garde';

    public const CIVILITY_MR = 'Mr';
    public const CIVILITY_MS = 'Mme';

    /**
     * The attributes that are mass assignables.
     *
     * @var array
     */
    protected $fillable = [
        'doctor_id',
        'objet_demande',
        'civility',
        'name',
        'firstname',
        'address',
        'postal_code',
        'email',
        'phone',
        'date_consultation',
        'objet_demande_doctor',
        'precisions'
    ];

    /**
     * @var string[] 
     */
    protected $casts = [
        'date_consultation' => 'date',
    ];

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctors::class);
    }

    /**
     * @return false|string
     */
    public function getDateConsultAttribute()
    {
        return date('D d m Y', date_timestamp_get(date_create($this->date_consultation)));
    }

    /**
     * @param $phoneNumber
     * @return string
     */
    public function getPhoneFormated($phoneNumber): string 
    {
        if ($phoneNumber) {
            return
                substr($phoneNumber, 0, 2)
                . ' ' .
                substr($phoneNumber, 3, 2)
                . ' ' .
                substr($phoneNumber, 5, 2)
                . ' ' .
                substr($phoneNumber, 7, 2)
                . ' ' .
                substr($phoneNumber, 8);
        }
    }

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
     * @return array
     */
    public static function objDemandeOptions(): array
    {
        return [
            static::OBJECT_DEMANDE_1 => __('globals.attributes.objetDemandeOptions.demande1'),
            static::OBJECT_DEMANDE_2 => __('globals.attributes.objetDemandeOptions.demande2'),
        ];
    }
}
