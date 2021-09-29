<?php

namespace Database\Seeders;

use App\Models\TypeEnseignement;
use Illuminate\Database\Seeder;

class TypeEnseignementSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeEnseignement::insert([
            [
                "libelle" => "ENSEIGNEMENT SECONDAIRE TECHNIQUE ET PROFESSIONNEL",
                "code" => "estp",
                "image" => "https://via.placeholder.com/500x500.png/006677?text=png+non",
                "description" => "L’enseignement technique et professionnel (ESTP) a un but utilitaire : permettre l’acquisition des connaissances, des compétences et d’attitudes qui allient la maîtrise des techniques et des sciences, et la connaissance du monde du travail en vue de l’insertion professionnelle des jeunes",
                "description_full" => "L’enseignement technique et professionnel (ESTP) a un but utilitaire : permettre l’acquisition des connaissances, des compétences et d’attitudes qui allient la maîtrise des techniques et des sciences, et la connaissance du monde du travail en vue de l’insertion professionnelle des jeunes. À ce propos, il a pour objet l’étude théorique et pratique des sciences et des arts ou métiers en vue de préparer les élèves aux différentes carrières de l’industrie et des sciences et technologies du tertiaire. ",
                "created_at" => now(),
            ],
            [
                "libelle" => "ENSEIGNEMENT SECONDAIRE GÉNÉRAL",
                "code" => "esg",
                "image" => "https://via.placeholder.com/500x500.png/007766?text=png+blanditiis",
                "description" => "L’enseignement général a une visée plus académique et théorique que pratique. Il prépare les élèves à comprendre les faits socioéconomiques, scientifiques, mathématiques, etc. sans les rendre pour autant experts/professionnels d’un quelconque domaine. Incidemment, ses bénéficiaires sont le plus souvent amenés à faire de longues études (dans les universités et les grandes écoles de formation) ou les classes préparatoires. Certains se réorientent vers l’enseignement technique et professionnel, la formation professionnelle ou l’apprentissage",
                "description_full" => "L’enseignement général a une visée plus académique et théorique que pratique. Il prépare les élèves à comprendre les faits socioéconomiques, scientifiques, mathématiques, etc. sans les rendre pour autant experts/professionnels d’un quelconque domaine. Incidemment, ses bénéficiaires sont le plus souvent amenés à faire de longues études (dans les universités et les grandes écoles de formation) ou les classes préparatoires. Certains se réorientent vers l’enseignement technique et professionnel, la formation professionnelle ou l’apprentissage",
                "created_at" => now(),
            ],
        ])
    }
}
