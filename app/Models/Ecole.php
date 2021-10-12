<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecole extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'libelle',
    ];

    public function Type()
    {
        return $this->belongsTo(TypeEcole::class);
    }

    public function Localite()
    {
        return $this->belongsTo(Localite::class);
    }
}
