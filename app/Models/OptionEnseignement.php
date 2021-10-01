<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionEnseignement extends Model
{
    use HasFactory;

    public function TypeEnseignement()
    {
        return $this->belongsTo(TypeEnseignement::class);
    }

    public function SectionEnseignement()
    {
        return $this->hasMany(SectionEnseignement::class);
    }
}
