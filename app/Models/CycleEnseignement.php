<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cycleEnseignement extends Model
{
    use HasFactory;

    public function conditionAccess()
    {
        return $this->morphMany(ConditionAccess::class, 'table');
    }

    public function filiereEnseignement()
    {
        return $this->hasMany(filiereEnseignement::class);
    }

}
