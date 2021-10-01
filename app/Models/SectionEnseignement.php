<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionEnseignement extends Model
{
    use HasFactory;

    public function OptionEnseignement()
    {
        return $this->belongsTo(OptionEnseignement::class);
    }

    public function FiliereEnseignement()
    {
        return $this->hasMany(FiliereEnseignement::class);
    }
}
