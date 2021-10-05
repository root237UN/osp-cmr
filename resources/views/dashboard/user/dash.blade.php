@extends('layouts.wrapper')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                <div class="p-3 bg-white d-flex justify-content-between">{{ __('Dashboard') }}
                    <p class="mb-0">
                        <span>Time</span>
                        <span class="alert m-0 p-2 alert-success">
                            <i class="fas fa-search"></i>
                        </span>
                    </p>
                </div>

                <div class="card my-2 mx-3 card-welcome">
                    <div class="card-body">
                        <div class="col-7">

                            <h4 class="welcome-text mt-2">Bon retour {{Auth::user()->name}} !</h4>
                            <p class="text-white welcome-text-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet luctus venenatis lectus magna fringilla urna.</p>

                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
