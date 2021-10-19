<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    public function Structure()
    {
        return $this->belongsToMany(StructureFormation::class);
    }

    public function TypeFormation()
    {
        return $this->belongsTo(TypeFormation::class);
    }
}
