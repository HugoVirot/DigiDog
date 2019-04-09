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
    <article id="formulaire" class="container justify-content-center text-center">
        <h3>C'est parti !</h3>
        <form id="formulaire" method="post">
                <label class="nomchamp" for="InputEmail">Pseudonyme</label>
                <input type="text" class="form-control mb-3" id="pseudo" name="pseudo" aria-describedby="pseudo"
                       placeholder="JeanDupont">
                <label class="nomchamp" for="InputEmail">Adresse e-mail</label>
                <input type="email" class="form-control mb-3" id="email" name="email" aria-describedby="emailHelp"
                       placeholder="jeandupont@labrador.fr">
                <label class="nomchamp" for="InputEmail">Confirmez l'e-mail</label>
                <input type="email" class="form-control mb-1" id="verif_email" aria-describedby="emailHelp"
                       placeholder="jeandupont@labrador.fr">
                <small id="emailHelp" class="form-text text-muted mb-1">Nous ne partagerons jamais votre e-mail avec des
                    tiers.
                </small>
                <label class="nomchamp" for="InputPassword">Mot de passe</label>
                <input type="password" class="form-control mb-1 id="password" name="password" placeholder="******">
                <small id="emailHelp" class="form-text text-muted mb-2">MINIMUM 6 CARACTERES
                </small>
                <label class="nomchamp" for="InputPassword">Confirmez le mot de passe</label>
                <input type="password" class="form-control" id="verif_password" name="verif_password" placeholder="******">
            <button type="submit" class="btn btn-primary mt-3">Valider</button>
        </form>
    </article>
@endsection