<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localite extends Model
{
    use HasFactory;

    public function Structure()
    {
        return $this->belongsToMany(Structure::class);
    }

    public function Arrondissement()
    {
        return $this->belongsTo(Arrondissement::class);
    }
}
