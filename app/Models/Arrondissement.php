<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arrondissement extends Model
{
    use HasFactory;

    public function Localite()
    {
        return $this->hasMany(Localite::class);
    }

    public function Departement()
    {
        return $this->belongsTo(Departement::class);
    }
}
