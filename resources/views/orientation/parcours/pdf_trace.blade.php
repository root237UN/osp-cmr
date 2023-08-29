@extends('layouts.download')

@section('title')
    <title>OSP - Cameroun | trace</title>
    <style type="text/css">
        @page {
            margin: 0px;
        }
        body {
            margin: 0px;
        }
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            font-size:12px;
        }
        td, th {
            border: 1px solid #000 !important;
            padding: 3px;
            font-size: 9px;
            /* text-align: center; */
        }

        tfoot tr td {
            font-weight: bold;
            font-size:12px;
        }
        
    </style>
@endsection

@section('content')
    <h3>Votre parcours à l'issue de votre navigation</h3>

    <table class="table table-bordered" width="100%">
        <thead class="thead-dark">
            <tr>
                <th scope="col" colspan="2">
                    Orientation
                </th>
                <th colspan="3" scope="col">
                    Orientation primaire
                    <!-- <i class="bi bi-arrow-bar-right"></i> -->
                    vers
                    {{$cycle->libelle}} de l' <?php echo strtolower($type->libelle) ?>
                </th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="col" colspan="2">Enseignement</th>
                <td >{{$type->description}}</td>
            </tr>
            <tr>
                <th  scope="col">Parcours</th>
                <td>{{$option->libelle}}</td>
                <td colspan="2">{{$option->description}}</td>
            </tr>
            <tr>
                <th scope="col">Option</th>
                <td>{{$section->libelle}}</td>
                <td colspan="2">{{$section->description}}</td>
            </tr>
        </tbody>
    </table>

    <table class="table table-bordered" width="100%">
        <thead class="thead-dark">
            <tr>
                
                <th scope="col" colspan="2">Spécialité</th>
                <th scope="col" colspan="3">{{$filiere->libelle}}</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row" colspan="2">Description</th>
                <td colspan="3">{{$filiere->description ? $filiere->description : "Aucune description pour le moment" }}</td>
            </tr>
            <tr>
                <th scope="row" colspan="2">Compétences clés developpées / Job description</th>
                <td colspan="3">
                    <ul>
                        @foreach ($competences as $item)
                            <li>{{$item->libelle}}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            <!-- <tr>
                <th scope="row">Débouchées</th>
                <td colspan="3">
                    <ul>
                        @foreach ($debouches as $item)
                            <li>{{$item->libelle}} ( {{$item->description ? $item->description : "description" }})</li>
                        @endforeach
                    </ul>
                </td>
            </tr> -->
        </tbody>
    </table>

    <table class="table table-bordered" width="100%">
        <thead class="thead-light">
            <tr>
                <th scope="col">Etablissement</th>
                <th scope="col" colspan="3"></th>
            </tr>
        </thead>
        <tbody>
            <!-- <tr>
                <th scope="row">Enseignements</th>
                <td colspan="3">
                    <ul style="column-count: 2">
                        @foreach ($enseignements as $item)
                            <li>{{$item->libelle}}</li>
                        @endforeach
                    </ul>
                </td>

            </tr> -->
            <!-- <tr>
                <th scope="row">Ecoles</th>
                <td colspan="3">
                    <ul style="column-count: 2">
                        @foreach ($ecoles as $item)
                            <li>{{$item->libelle}}</li>
                        @endforeach
                    </ul>
                </td>
            </tr> -->
        </tbody>
    </table>
@endsection
