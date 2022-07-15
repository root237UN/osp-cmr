<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metiers extends Model
{
    use HasFactory;

    // public function FiliereEnseignement()
    // {
    //     return $this->belongsToMany(FiliereEnseignement::class);
    // }

    public function filieres()
    {
        return $this->morphedByMany(FiliereEnseignement::class,'job');
    }

    public function formations()
    {
        return $this->morphedByMany(Formation::class,'job');
    }
}
