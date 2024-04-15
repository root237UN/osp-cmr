@extends('layouts.osp')

@section('title')
    <title>OSP - Cameroun | Orientation</title>
    <link rel="stylesheet" href="{{ asset('css/search/orientation.scss') }}">
@endsection


@section('content-header')
    <div class="row">
        {{-- <div class="path_choix justify-content-center d-flex"> --}}
            <div class="path_choix_bloc d-flex justify-content-center col-xs-12 col-md-6">
                <a href="{{ route('orientation.path1') }}">
                    <div class="path_choix_item col-2">
                        <p>Je viens du primaire / je suis titulaire d'un C.E.P ou d'un FSLC</p>
                    </div>
                </a>
            </div>

            <div class="path_choix_bloc d-flex justify-content-center col-xs-12 col-md-6">
                <a href="{{ route('orientation.path_2') }}" class="path_choix_item_2">
                    <div class="path_choix_item  col-2">

                        <p>Je viens du 1er cycle du secondaire / je suis titulaire d'un BEPC, CAP ou GCE O-Lecel </p>
                    </div>
                </a>
            </div>

        {{-- </div> --}}
    </div>

    {{-- Search --}}
    {{-- @livewire('search-bar-orientation') --}}
@endsection
