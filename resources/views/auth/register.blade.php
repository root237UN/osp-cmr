@extends('layouts.layout')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="row col-8 justify-content-center">
        <div class="col-md-8 my-4 py-4">
            <div class="card my-2">
                <div class="card-header text-center" >
                    <span class="logo-login">Orientation</span>
                </div>

                <div class="card-body pt-0 pb-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group d-flex justify-content-center row">
                            <div class="col-md-10 my-3">
                                <input id="name" placeholder="Nom" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group d-flex justify-content-center row">
                            <div class="col-md-10 my-3">
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group d-flex justify-content-center row">
                            <div class="col-md-10 my-3">
                                <input id="password" placeholder="Mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group d-flex justify-content-center row">
                            <div class="col-md-10 my-3">
                                <input id="password-confirm" placeholder="Confirmer mot de passe" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="my-4">
                                <button type="submit" class=" btn col-md-10 offset-md-1 btn-app">
                                {{ __('Register') }}
                                </button>
                            </div>
                            <div class="divider-form col-8 offset-2 my-2"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
