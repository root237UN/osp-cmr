@extends('layouts.layout')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="row col-8 justify-content-center">
        <div class="col-md-8 my-4 py-4">
            <div class="card" style="margin-top: 100px;">
                <div class="card-header text-center" >
                    <span class="logo-login">Orientation</span>
                </div>

                <div class="card-body pt-0 pb-4">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group d-flex justify-content-center row">
                            <div class="col-md-10 my-3">
                                <input id="email" placeholder="Emali" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="my-4">
                                <button type="submit" class=" btn col-md-10 offset-md-1 btn-app">
                                {{ __('Send Password Reset Link') }}
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
