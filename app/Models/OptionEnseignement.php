<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class optionEnseignement extends Model
{
    use HasFactory;

    public function typeEnseignement()
    {
        return $this->belongsTo(TypeEnseignement::class);
    }

    public function sectionEnseignement()
    {
        return $this->hasMany(sectionEnseignement::class);
    }
}
