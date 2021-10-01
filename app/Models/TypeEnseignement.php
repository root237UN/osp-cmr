<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeEnseignement extends Model
{
    use HasFactory;

    public function OptionEnseignements()
    {
        return $this->hasMany(OptionEnseignement::class);
    }
}
