<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeFormation extends Model
{
    use HasFactory;

    public function AvantageTypeFormation()
    {
        return $this->hasMany(AvantageTypeFormation::class);
    }

    public function PersonneCibleTypeFormation()
    {
        return $this->hasMany(PersonneCibleTypeFormation::class);
    }

    public function Formations()
    {
        return $this->hasMany(Formation::class);
    }
}
