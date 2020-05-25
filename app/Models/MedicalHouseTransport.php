<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class MedicalHouseTransport extends Pivot
{
    protected $table = ['medical_houses_transports'];
}
