<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StructureInsertionPro extends Model
{
    use HasFactory;
    public function Programmes()
    {
        return $this->hasMany(ProgrammeInsertionPro::class);
    }
}
