@extends('layout.app')

@section('content')
    <div class="container-fluid">

        <div class="row">

            <div class="col-md-6">

                <div class="row justify-content-center">

                    <article id="connexion" class="mb-3">

                        <div class="d-flex justify-content-center">
                            <img class="connexion img-fluid " id="connexion" src="{{ asset("images/connexion.jpg") }}">
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
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       id="InputEmail"
                                       aria-describedby="emailHelp"
                                       placeholder="jeandupont@labrador.fr" value="{{ old('email') }}" required
                                       autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                                @endif

                                <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre
                                    e-mail
                                    avec
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

            <div class="col-md-6">

                <article id="chiots" class="mb-3">

                    <div class="d-flex justify-content-center">
                        <img class="inscription img-fluid" id="chiots" src="{{ asset("images/chiots.jpg") }}">
                    </div>

                </article>

                <article id="formulaire" class="container justify-content-center text-center">

                    <h3>C'est parti !</h3>

                    <form id="formulaire" method="post">
                        <label class="nomchamp" for="InputEmail">Pseudonyme</label>
                        <input type="text" class="form-control mb-3" id="pseudo" name="pseudo"
                               aria-describedby="pseudo"
                               placeholder="JeanDupont">
                        <label class="nomchamp" for="InputEmail">Adresse e-mail</label>
                        <input type="email" class="form-control mb-3" id="email" name="email"
                               aria-describedby="emailHelp"
                               placeholder="jeandupont@labrador.fr">
                        <label class="nomchamp" for="InputEmail">Confirmez l'e-mail</label>
                        <input type="email" class="form-control mb-1" id="verif_email"
                               aria-describedby="emailHelp"
                               placeholder="jeandupont@labrador.fr">
                        <small id="emailHelp" class="form-text text-muted mb-1">Nous ne partagerons jamais votre
                            e-mail avec
                            des
                            tiers.
                        </small>
                        <label class="nomchamp" for="InputPassword">Mot de passe</label>
                        <input type="password" class="form-control mb-1 id=" password" name="password"
                        placeholder="******">
                        <small id="emailHelp" class="form-text text-muted mb-2">MINIMUM 6 CARACTERES
                        </small>
                        <label class="nomchamp" for="InputPassword">Confirmez le mot de passe</label>
                        <input type="password" class="form-control" id="verif_password" name="verif_password"
                               placeholder="******">
                        <button type="submit" class="btn btn-primary-bis mt-3">Valider</button>
                    </form>

                </article>
            </div>

        </div>
    </div>
@endsection
