<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contacts extends Model
{
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
        'name_doctor',
        'firstname_doctor',
        'objet_demande_doctor',
        'precisions'
    ];

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctors::class);
    }
}
