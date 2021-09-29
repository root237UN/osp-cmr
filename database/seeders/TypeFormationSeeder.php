<?php

namespace Database\Seeders;

use App\Models\TypeFormation;
use Illuminate\Database\Seeder;

class TypeFormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeFormation::insert([
            [
                "libelle" => "FORMATIONS PROFESSIONNELLES ET PAR LA VOIE D’APPRENTISSAGE ",
                "code" => "fp",
                "image"=> "https://via.placeholder.com/500x500.png/007766?text=png+blanditiis",
                "description" => "La formation professionnelle développe des compétences pratiques et opérationnelles utiles à la production des biens et des services",
                "description_full" => "La formation professionnelle développe des compétences pratiques et opérationnelles utiles à la production des biens et des services. C’est dire que la sortie prématurée du système formel de l’éducation n’est pas une condamnation irréversible au développement personnel. Même l’activité, à l’exemple du bénévolat et du volontariat, en secteur informel ou artisanal, développe des compétences de par leur contenu éducateur et formateur. Une telle formation a donc vocation d’assurer l’insertion professionnelle, la compétitivité et la transformation socioéconomique",
                "description_end" => "Au Cameroun, la formation professionnelle et la formation par la voie de l’apprentissage sont offertes par plusieurs acteurs : les organisations professionnelles d’employeurs et de travailleurs, les entreprises, les Collectivités Territoriales, l’État (à travers certaines de ses structures ministérielles et les organismes dédiés) et certaines Organisations de la société civile. Ci-après, sans prétendre à l’exhaustivité, il est fait une présentation de quelques centres de formation et d’apprentissage courants/grand public.",
            ],
        ]);
    }
}
