<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filiereEnseignement extends Model
{
    use HasFactory;

    public function diplome()
    {
        return $this->hasOne(diplome::class);
    }

    public function sectionEnseignement()
    {
        return $this->belongsTo(sectionEnseignement::class);
    }

    public function cycleEnseignement()
    {
        return $this->belongsTo(cycleEnseignement::class);
    }

    public function enseignements()
    {
        return $this->hasMany(EnseignementProfessionnel::class);
    }

    public function competences()
    {
        return $this->hasMany(CompetenceProfessionnelle::class);
    }

    public function metiers()
    {
        return $this->belongsToMany(Metiers::class);
    }

    public function debouches()
    {
        return $this->belongsToMany(Debouches::class);
    }

    public function conditionAccess()
    {
        return $this->morphMany(ConditionAccess::class, 'table');
    }
}
