<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiliereEnseignement extends Model
{
    use HasFactory;

    public function Diplome()
    {
        return $this->hasOne(Diplome::class);
    }

    public function SectionEnseignement()
    {
        return $this->belongsTo(SectionEnseignement::class);
    }

    public function CycleEnseignement()
    {
        return $this->belongsTo(CycleEnseignement::class);
    }

    public function Enseignements()
    {
        return $this->hasMany(EnseignementProfessionnel::class);
    }

    public function Competences()
    {
        return $this->hasMany(CompetenceProfessionnelle::class);
    }

    // public function Metiers()
    // {
    //     return $this->belongsToMany(Metiers::class);
    // }

    public function Debouches()
    {
        return $this->belongsToMany(Debouches::class);
    }

    public function ConditionAccess()
    {
        return $this->morphMany(ConditionAccess::class, 'table');
    }

    public function Ecoles()
    {
        return $this->belongsToMany(Ecoles::class);
    }

    public function metiers()
    {
        return $this->morphToMany(Metiers::class,'metier');
    }
}
