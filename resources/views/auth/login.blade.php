@extends('layouts.app')

@section('content')
<section class="home bg-image2 home-small" id="home">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="d-flex justify-content-center my-4">
                                <img class="" src="https://seeklogo.com/images/F/forex-logo-6B4D0AB43E-seeklogo.com.png" alt="logo" height="40">
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-md-3 col-form-label text-md-end">{{ __('Adresse Email') }}</label>

                                <div class="col-md-8">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-3 col-form-label text-md-end">{{ __('Mot de passe') }}</label>

                                <div class="col-md-8">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-7 offset-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Souvenir de moi') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-9 offset-md-3">
                                    <div class="row m-0 p-0">
                                        <button type="submit" class="col-md-5 col-6 btn btn-primary">
                                            {{ __('Connecter') }}
                                        </button>
                                        <div class="col-6">
                                            @if (Route::has('password.request'))
                                            <a class="nav-link text-primary " href="{{ route('password.request') }}">
                                                {{ __('Mot de passe oublie?') }}
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
