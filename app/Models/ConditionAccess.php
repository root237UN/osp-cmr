<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConditionAccess extends Model
{
    use HasFactory;

    public function table()
    {
        return $this->morphTo();
    }
}
