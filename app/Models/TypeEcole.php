<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeEcole extends Model
{
    use HasFactory;

    public function Ecole()
    {
        return $this->hasMany(Ecole::class);
    }
}
