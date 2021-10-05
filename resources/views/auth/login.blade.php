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
                    <form method="POST" class="pb-4" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group d-flex justify-content-center row">
                            <div class="col-md-10 my-3">
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group d-flex justify-content-center row">
                            <div class="col-md-10 my-3">
                                <input id="password" placeholder="Mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="align-items: center;">
                            <div class="col-md-5 offset-md-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Se souvenir') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                @if (Route::has('password.request'))
                                <a class="btn p-0 btn-link" href="{{ route('password.request') }}">
                                    {{ __('Mot de passe oublie?') }}
                                </a>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="my-4">
                                <button type="submit" class=" btn col-md-10 offset-md-1 btn-app">
                                    Connexion
                                </button>
                            </div>
                            <div class="divider-form col-8 offset-2 my-2"><span class="text-divider">ou</span></div>
                            <div class="m-0 px-2">
                            <a href="{{route('register')}}" class=" btn col-md-10 offset-md-1 btn-register">Enregistrer</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
