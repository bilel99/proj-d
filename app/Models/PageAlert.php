<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PageAlert extends Pivot
{
    protected $table = ['pages_alerts'];
}
