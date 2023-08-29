@extends('layouts.osp')

@section('title')
    <title>OSP - Cameroun | Orientation <?php echo strtolower($type->libelle); ?> prémier cycle</title>
    <link rel="stylesheet" href="{{ asset('css/search/orientation.scss') }}">
@endsection


@section('content-header')
@include('partials.header.header_orientation')
    <div class="row">
        <div class="path_choix justify-content-center d-flex col-12">
            {{-- Options d'enseignements --}}
            <div class="justify-content-between mb-2 d-flex">
                @foreach ($options as $item)
                    <a class="d-block path_choix_block mr-4"
                        href="{{ route('orientation.path1.options', ['code' => $item->code]) }}">
                        <div class="path_choix_item_option  col-2">
                            <p> <?php echo ucfirst($item->libelle); ?> </p>
                            <!-- <p class="path_cycle">
                                <span>CM2</span>
                                <i class="bi bi-arrow-bar-right"></i>
                                <span class="text-uppercase"> <span class="text-lowercase"> 1 <sup>er</sup> Cycle</span>
                                </span>
                                <i class="bi bi-arrow-bar-right"></i>
                                <span class="text-uppercase"> {{ $item->code }}</span>
                            </p> -->
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Search --}}
    @livewire('search-bar-orientation')
@endsection
