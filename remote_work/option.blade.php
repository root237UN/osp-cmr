@extends('layouts.osp')

@section('title')
    <title>OSP - Cameroun | Orientation <?php echo strtolower($option->libelle); ?> prémier cycle</title>
    <link rel="stylesheet" href="{{ asset('css/search/orientation.scss') }}">
@endsection


@section('content-header')
    <div class="d-flex">
        <div class="col-4 d-flex justify-content-center " style="align-items: center;" data-aos="zoom-in-down">
            <img class="img img-thumbnail img-cover m-2" src="{{ asset('images/bg3.jpg') }}"
                style="border-radius:50%;border:none" />
        </div>
        <div class="col-8 pe-5" id="description_option">
            <h2 class="my-2 py-4 title-1 d-flex justify-content-start" style="align-items: center;">
                <span class="text-white">{{ $option->libelle }}</span>
            </h2>
            <div class="text-description site-text col-md-12 py-2">{{ $option->description_full }}</div>
            <div class="line-infos site-text d-flex justify-content-between">
                <a class="link-parcours text-white" href="#parcours">Decouvrez les parcours</a>
                <a class="link-ensavoir" href="#" style="color:#fff">En savoir plus!</a>
            </div>
            <hr style="color: #fff">
            {{-- <a class="link-question site-text">Des questions. Posez-les ici !!!</a> --}}
        </div>

    </div>
@endsection

@section('section-body')
    <section id="content-parcours">

        <div class="container">
            <div class="d-flex justify-content-center py-5">
                <h2 class="title-option title-1-1 text-dark">Le choix de metier commence ici </span>
                </h2>
            </div>

            <div class="row d-flex justify-content-center" id="parcours">
                @forelse($sections as $parcours)
                    <div class="col-4">
                        <a class="card card-cover w-100 card-parcours"
                            href="#">
                            <div class="d-flex justify-content-between py-2 card-header  card-header-4">
                                <figure class="figure figure-img d-flex justify-content-center">
                                    <img class="img img-fluid" src="{{ asset('images/bg3.jpg') }}"
                                        style="border-radius: 9px;">
                                </figure>
                                <div class="col-6">
                                    <h4 class="title-parcours site-text-medium py-2">{{ $parcours->libelle }}</h4>
                                    <ul class="list-group">
                                        <?php
                                        $tab = [];
                                        $tab = $parcours->FiliereEnseignement;
                                        $i = 0;
                                        if (count($tab) > 0) {
                                            foreach ($tab as $filiere) {
                                                $i += 1;
                                                echo "<li class='site-text item'><i class='fas fa-check' style='margin-right:3px;font-size: 10px;'></i>" . $filiere->libelle . '</li>';
                                                if ($i == 3) {
                                                    break;
                                                }
                                            }
                                        } else {
                                            echo '<li>Aucune filiere !!!</li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex-column d-flex justify-content-between">
                                <div class="description-parcours site-text">{{ $parcours->description }}</div>
                                <div class="d-flex justify-content-center py-3">
                                    <span class="decouvrir-parcours site-text">Decouvrir le parcours</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class='row d-flex justify-content-center'>
                        <div class="col-4 d-flex justify-content-center">
                            <a class="card card-parcours rounded-3" style="min-height: 150px;">
                                <div class="card-body">
                                    <h3 class="py-4">Aucune option trouvee !!!</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
