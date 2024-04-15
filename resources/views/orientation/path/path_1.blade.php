@extends('layouts.osp')

@section('title')
    <title>OSP - Cameroun | Orientation - premier cycle</title>
    <link rel="stylesheet" href="{{ asset('css/search/orientation.scss') }}">
@endsection


@section('content-header')
    @include('partials.header.header_orientation')
    <div class="row mb-4">

        @foreach ($type_enseignements as $item)
            <a class="path_choix_bloc d-flex justify-content-center col-xs-12 col-md-4"
                href="{{ route('orientation.path1.parcours', ['code' => $item->code]) }}">
                <div class="path_choix_item  col-2">
                    <p>{{ $item->libelle }} </p>
                    <!-- <p class="path_cycle">
                                    <span>CM2</span>
                                    <i class="bi bi-arrow-bar-right"></i>
                                    <span class="text-uppercase"> {{ $item->code }}</span>
                                </p> -->
                </div>
            </a>
        @endforeach

        @foreach ($type_formations as $item)
            <a class="path_choix_bloc d-flex justify-content-center col-xs-12 col-md-4"
                href="{{ route('orientation.path1') }}">
                <div class="path_choix_item  col-2">
                    <p>{{ $item->libelle }} </p>
                    <!-- <p class="path_cycle">
                                    <span>CM2</span>
                                    <i class="bi bi-arrow-bar-right"></i>
                                    <span class="text-uppercase"> {{ $item->code }}</span>
                                </p> -->
                </div>
            </a>
        @endforeach
    </div>
    </div>

    {{-- Search --}}
    {{-- @livewire('search-bar-orientation') --}}
@endsection
