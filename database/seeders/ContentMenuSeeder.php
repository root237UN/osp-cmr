<?php

namespace Database\Seeders;

use App\Models\contentMenu;
use Illuminate\Database\Seeder;

class ContentMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        contentMenu::create(
            [
                'libelle'=>"Faites éclore votre potentiel",
                'description'=>"L'offre éducative regorge d'inombrables spécificités. En avez-vous conscience ?",
                'menu_visite_id'=>3,
                'position'=>1
            ]);
            contentMenu::create([
                'libelle'=>"Evaluez des opportunités",
                'description'=>"Disposer de la bonne information vous permet de capitaliser vos idées. ",
                'menu_visite_id'=>3,
                'position'=>2
            ]);
            contentMenu::create([
                'libelle'=>"Choisissez un parcours",
                'description'=>"L'avenir professionnel est conditionné par des choix scolaires antérieurs. Developper des compétences en connaissance de cause. ",
                'menu_visite_id'=>3,
                'position'=>3
            ]);
            contentMenu::create([
                'libelle'=>"Découvrir un métier",
                'description'=>"Il existe plusieurs métiers pour se batir une carrière professionnelle. Quel est le vôtre ?",
                'menu_visite_id'=>3,
                'position'=>4
            ]);
            contentMenu::create([
                'libelle'=>"Faites-vous guider",
                'description'=>"Une bonne orientation vaut mieux qu'une progression aléatoire.",
                'menu_visite_id'=>3,
                'position'=>5
            ]);
            contentMenu::create([
                'libelle'=>"Pour un avenir mieux préparé",
                'description'=>"Anticipez sur des choix scolaires et un avenir professionnel.",
                'menu_visite_id'=>3,
                'position'=>6
            ]);
    }
}
