<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StructureFormation extends Model
{
    use HasFactory;

    public function Formation()
    {
        return $this->belongsToMany(Formation::class);
    }

    public function Localite()
    {
        return $this->belongsToMany(Localite::class);
    }

    public function conditionAccess()
    {
        return $this->morphMany(ConditionAccess::class, 'table');
    }
}
