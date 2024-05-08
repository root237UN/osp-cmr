@extends('layouts.osp')

@section('title')
    <title>OSP - Cameroun | Orientation <?php echo strtolower($type->libelle); ?> prémier cycle</title>
    <link rel="stylesheet" href="{{ asset('css/search/orientation.scss') }}">
@endsection


@section('content-header')
<ul class="breadcrumbs">
    <li><a href="#" class="breadcrumbs__pointer breadcrumbs__pointer--first"><i
                class="fa-solid fa-house-chimney"></i><span>Orientation</span></a></li>
    {{-- {{-- <li><a href="#" class="breadcrumbs__pointer"><i class="fa-solid fa-bag-shopping"></i><span>Products</span></a></li> --}}
        <li><a href="#" class="breadcrumbs__pointer"><i class="fa-solid fa-cart-plus"></i><span>Je viens du primaire (C.E.P, F.S.L.C)</span></a></li>
    <li><a href="#" class="breadcrumbs__pointer breadcrumbs__pointer--last breadcrumbs__pointer--current"><i
        class="fa-solid fa-credit-card"></i><span>{{$type->libelle}}</span></a></li>
</ul>
@include('partials.header.header_orientation')
    <div class="row mb-4">
        {{-- <div class="path_choix justify-content-center d-flex col-12"> --}}
            {{-- Options d'enseignements --}}
            {{-- <div class="justify-content-between mb-2 d-flex"> --}}
                @foreach ($options as $item)
                    <a class="path_choix_bloc d-flex justify-content-center col-xs-12 col-md-6"
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
    {{-- @livewire('search-bar-orientation') --}}
@endsection
