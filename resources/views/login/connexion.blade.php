@extends ('layout.app')

@section('title')
    Connexion - DigiDog
@endsection

@section('content')
    <article id="connexion" class="container-fluid mb-3">
        <div class="row justify-content-center">
        <img id="chiots" src="{{ asset("images/connexion.jpg") }}">
        <h1>Connexion</h1>
        </div>
    </article>
    <article id="formulaire" class="container justify-content-center text-center mb-3">
       <!-- <form></form> -->
    <h3>Entrez vos identifiants</h3>
        <form method="post" action="">
            <div class="form-group">
                <label for="InputEmail">Adresse e-mail</label>
                <input type="email"  required class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="jeandupont@labrador.fr">
                <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre e-mail avec des tiers.</small>
            </div>
            <div class="form-group">
                <label for="InputPassword">Mot de passe</label>
                <input type="password" required class="form-control" id="InputPassword" placeholder="********">
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </article>
@endsection