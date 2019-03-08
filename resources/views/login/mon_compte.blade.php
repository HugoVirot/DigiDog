@extends ('layout.app')

@section('title')
    Mon Compte - DigiDog
@endsection

@section('content')
    <article id="photo" class="container-fluid">
        <div class="row justify-content-center">
            <img class="img-responsive" id="chiots" src="{{ asset("images/moncompte.jpeg") }}">
        </div>
    </article>
    <article id="formulaire" class="container justify-content-center text-center mb-3">
        <form id="formulaire" method="post">
            <h3> Mes informations </h3>
            <div class="form-group">
                <label class="nomchamp" for="InputEmail">Adresse e-mail actuelle :</label>
                <h6><strong>jeandupont@labrador.fr</strong></h6>
                <input type="email" class="form-control" id="NewEmail" aria-describedby="emailHelp"
                       placeholder="nouvelle adresse e-mail">
                <small id="emailHelp" class="form-text text-muted mb-2">Nous ne partagerons jamais votre e-mail avec des
                    tiers.
                </small>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
            <div class="form-group">
                <label class="nomchamp" for="InputPassword">Modifier le mot de passe</label>
                <input type="password" class="form-control" id="Password" placeholder="ancien">
                <input type="password" class="form-control" id="NewPassword" placeholder="nouveau">
                <small id="emailHelp" class="form-text text-muted mb-2">MINIMUM 6 CARACTERES.
                </small>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
        </form>
    </article>
@endsection