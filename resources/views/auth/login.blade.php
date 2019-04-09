@extends('layout.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">

            <article id="connexion" class="container-fluid mb-3">

                <div class="row justify-content-center">
                    <img class="img-responsive" id="connexion" src="{{ asset("images/connexion.jpg") }}">
                </div>

            </article>

            <article id="formulaire" class="container justify-content-center text-center mb-3">

                <!-- <form></form> -->
                <h3>Entrez vos identifiants</h3>

                <form method="post" class="mb-4" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">

                        <label for="InputEmail">Adresse e-mail</label>

                        <input type="email" name="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="InputEmail"
                               aria-describedby="emailHelp"
                               placeholder="jeandupont@labrador.fr" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                        <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre e-mail avec
                            des tiers.
                        </small>

                    </div>

                    <div class="form-group">

                        <label for="InputPassword">Mot de passe</label>

                        <input type="password" name="password"
                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                               id="InputPassword" placeholder="********" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group row">
                        <div class="col-md">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md ">

                            <button type="submit" class="btn btn-primary-bis col-md-3">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link col-md-9" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>


                </form>

            </article>


        </div>
    </div>
@endsection
