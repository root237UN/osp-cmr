@extends('layouts.osp')

@section('title')
    <title>OSP - Cameroun | Orientation</title>
    <link rel="stylesheet" href="{{asset('css/search/orientation.scss')}}">
@endsection


@section('content-header')
    <div class="row">
        <div class="path_choix justify-content-center d-flex col-12">
            <a href="{{ route('orientation.path1') }}">
                <div class="path_choix_item col-2">

                    <p>Je viens du primaire(C.E.P, FSLC), je souhaite m'orienter au 1 <sup>er</sup>Cycle </p>
                    <!-- <p class="path_cycle">
                        <span>CM2</span>
                        <i class="bi bi-arrow-bar-right"></i>
                        <span> 1 <sup>er</sup>cycle</span>
                    </p> -->
                </div>
            </a>

            <a href="{{route('orientation.path_2')}}">
                <div class="path_choix_item path_choix_item_2 col-2">

                    <p>Je viens du 1<sup>er</sup>Cycle, je souhaite m'orienter au 2 <sup>nd</sup>Cycle </p>
                    <!-- <p class="path_cycle">
                        <span> 1 <sup>er</sup>Cycle</span>
                        <i class="bi bi-arrow-bar-right"></i>
                        <span> 2 <sup>nd</sup>Cycle</span>
                    </p> -->
                </div>
            </a>
        </div>
    </div>

    {{-- Search --}}
    @livewire('search-bar-orientation')
@endsection
