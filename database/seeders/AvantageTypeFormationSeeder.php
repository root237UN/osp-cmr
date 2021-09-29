<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AvantageTypeFormation;

class AvantageTypeFormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AvantageTypeFormation::insert([
            [
                "libelle" => "l’exercice d’un métier",
                "type_formation_id" => 1
            ],
            [
                "libelle" => "la satisfaction immédiate des besoins en ressources humaines qualifiées",
                "type_formation_id" => 1
            ],
            [
                "libelle" => "l’amélioration des qualifications professionnelles",
                "type_formation_id" => 1
            ],
            [
                "libelle" => "la productivité des ressources humaines",
                "type_formation_id" => 1
            ],
            [
                "libelle" => "la promotion sociale et professionnelle des travailleurs.",
                "type_formation_id" => 1
            ],
        ]);
    }
}
