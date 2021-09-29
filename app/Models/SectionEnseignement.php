<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sectionEnseignement extends Model
{
    use HasFactory;

    public function optionEnseignement()
    {
        return $this->belongsTo(optionEnseignement::class);
    }

    public function filiereEnseignement()
    {
        return $this->hasMany(filiereEnseignement::class);
    }
}
