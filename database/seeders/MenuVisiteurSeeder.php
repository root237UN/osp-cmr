<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MenuVisite;

class MenuVisiteur extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        MenuVisite::create(
            [
                'titre'=> "Structure d'aide ",
                'libelle'=> "Structure d’aide à l’insertion professionnelle ",
                'description'=>"Pour les jeunes déscolarisés et diplômés sans emploi, l’État a mis sur pied de nombreux structures et programmes d’aide et d’accompagnement à l’insertion professionnelle.",
                'description_full'=>""
            ]);
            MenuVisite::create( [
                'titre'=> "Etablissement",
                'libelle'=> "Etablissement d’enseignement secondaire",
                'description'=>"Consulter les filières d'enseignement  offertes par l’ensemble des écoles d’enseignements secondaire sur le territoire national. Accéder ainsi aux spécificités de chacune d’elle !",
                'description_full'=>""
            ]);
            MenuVisite::create(  [
                'titre'=> "Accueil",
                'libelle'=> "La meilleure plateforme d’aide à l’orientation",
                'description'=>"Une plateforme conçue pour pallier le déficit de conseillers d’orientation au sein de nos écoles d'enseignement secondaires . Il s'agit d'améloirer la transition des jeunes apprenants de l'école primaire au collège/lycée ainsi que celle du 1er cycle au 2nd cycle de l'école secondaire; Afin de renforcer la prise de décision stratégique pour l’accomplissement d’une carrière.",
                'description_full'=>""
            ]);
    }
}
