<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Laravel\Passport\HasApiTokens;

class PageAlert extends Pivot
{
    use HasApiTokens;

    protected $table = ['pages_alerts'];
}
