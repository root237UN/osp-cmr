@extends('layouts.osp')

@section('title')
    <title>OSP - Cameroun | Orientation - premier cycle</title>
    <link rel="stylesheet" href="{{ asset('css/search/orientation.scss') }}">
@endsection


@section('content-header')
<div class="row text-center d-flex justify-content-center">
    <h3 class="pb-4">Voici à présent les choix qui s'offrant à vous</h3>
</div>
    <div class="row">
        <div class="path_choix justify-content-center d-flex col-12">
            {{-- Type d'enseignements --}}
            <div class="justify-content-between mb-2 d-flex">
                @foreach ($type_enseignements as $item)
                    <a class="d-block path_choix_block mr-4" href="{{ route('orientation.path1.parcours',["code"=>$item->code]) }}">
                        <div class="path_choix_item  col-2">
                            <p>{{ $item->libelle }} </p>
                            <p class="path_cycle">
                                <span>CM2</span>
                                <i class="bi bi-arrow-bar-right"></i>
                                <span class="text-uppercase"> {{ $item->code }}</span>
                            </p>
                        </div>
                    </a>
                @endforeach

                @foreach ($type_formations as $item)
                    <a href="{{ route('orientation.path1') }}">
                        <div class="path_choix_item  col-2">
                            <p>{{ $item->libelle }} </p>
                            <p class="path_cycle">
                                <span>CM2</span>
                                <i class="bi bi-arrow-bar-right"></i>
                                <span class="text-uppercase"> {{ $item->code }}</span>
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Search --}}
    @livewire('search-bar-orientation')
@endsection
