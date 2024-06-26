<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diplome extends Model
{
    use HasFactory;

    public function Filiere()
    {
        return $this->belongsTo(FiliereEnseignement::class);
    }
}
