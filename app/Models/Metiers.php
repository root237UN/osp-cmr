<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metiers extends Model
{
    use HasFactory;

    public function filiereEnseignement()
    {
        return $this->belongsToMany(filiereEnseignement::class);
    }
}
