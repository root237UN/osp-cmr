<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debouches extends Model
{
    use HasFactory;

    public function FiliereEnseignement()
    {
        return $this->belongsToMany(FiliereEnseignement::class);
    }
}
