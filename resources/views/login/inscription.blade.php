@extends ('layout.app')

@section('title')
    Inscription - DigiDog
@endsection

@section('content')
    <article id="connexion" class="container-fluid mb-3">
        <div class="row justify-content-center">
            <img class="img-responsive" id="chiots" src="{{ asset("images/chiots.jpg") }}">
        </div>
    </article>
    <article id="formulaire" class="container justify-content-center text-center mb-3">
        <!-- <form></form> -->
        <h3>C'est parti !</h3>
        <form id="formulaire" method="post">
            <div class="form-group">
                <label class="nomchamp" for="InputEmail">Adresse e-mail</label>
                <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp"
                       placeholder="jeandupont@labrador.fr">
                <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre e-mail avec des
                    tiers.
                </small>
            </div>
            <div class="form-group">
                <label class="nomchamp" for="InputPassword">Mot de passe</label>
                <input type="password" class="form-control" id="InputPassword" placeholder="mot de passe">
            </div>
            <div class="form-group">
                <legend class="nomchamp">Adresse de livraison</legend>
                <fieldset class="col-6">
                    <div class="row justify-content-center">

                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="label" for="adresse">Adresse</label>
                        </div>
                        <div class="col-6">
                            <input id="adresse" name="adresse" type=text required placeholder=" 99, rue du teckel">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="label" for=codepostal>Code postal</label>
                        </div>
                        <div class="col-6">
                            <input id=codepostal name=codepostal type=text required placeholder=" 99999">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="label" for=ville>Ville</label>
                        </div>
                        <div class="col-6">
                            <input id=ville name=ville type=text required placeholder=" Chienville">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="label" for=pays>Pays</label>
                        </div>
                        <div class="col-6">
                            <input id=pays name=pays type=text required placeholder=" France">
                        </div>
                    </div>
                </fieldset>
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </article>
@endsection