<?php

namespace App\Models;

use App\Models\Traits\Helpers;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, Helpers, HasApiTokens;
    
    public const CIVILITY_MR = 'Mr';
    public const CIVILITY_MS = 'Mme';

    public const STATUS_ACTIF = 1;
    public const STATUS_INACTIF = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'civility', 'name', 'firstname', 'email', 'avatar', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
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
     * @return array
     */
    public static function getWorkflowStatus(): array
    {
        return [
            static::STATUS_ACTIF => __('globals.attributes.status.actif'),
            static::STATUS_INACTIF => __('globals.attributes.status.inactif'),
        ];
    }

    /**
     * @return string
     */
    public function getStringStatus()
    {
        if (User::STATUS_ACTIF === $this->status) {
            return 'Actif';
        }

        return 'Inactif';
    }
}
