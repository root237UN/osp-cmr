@extends('layouts.osp')

@section('title')
    <title>OSP - Cameroun | Orientation - premier cycle</title>
    <link rel="stylesheet" href="{{ asset('css/search/orientation.scss') }}">
@endsection


@section('content-header')
    <ul class="breadcrumbs">
        <li><a href="#" class="breadcrumbs__pointer breadcrumbs__pointer--first"><i
                    class="fa-solid fa-house-chimney"></i><span>Orientation</span></a></li>
        {{-- <li><a href="#" class="breadcrumbs__pointer"><i class="fa-solid fa-bag-shopping"></i><span>Products</span></a></li>
            <li><a href="#" class="breadcrumbs__pointer"><i class="fa-solid fa-cart-plus"></i><span>Cart</span></a></li> --}}
        <li><a href="#" class="breadcrumbs__pointer breadcrumbs__pointer--last breadcrumbs__pointer--current"><i
            class="fa-solid fa-credit-card"></i><span>Je viens du primaire (C.E.P, F.S.L.C)</span></a></li>
    </ul>

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
