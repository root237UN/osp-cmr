<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;

    public function Arrondissement()
    {
        return $this->hasMany(Arrondissement::class);
    }
    public function Region()
    {
        return $this->belongsTo(Region::class);
    }
}
