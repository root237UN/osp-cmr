<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CycleEnseignement extends Model
{
    use HasFactory;

    public function ConditionAccess()
    {
        return $this->morphMany(ConditionAccess::class, 'table');
    }

    public function FiliereEnseignement()
    {
        return $this->hasMany(FiliereEnseignement::class);
    }

}
