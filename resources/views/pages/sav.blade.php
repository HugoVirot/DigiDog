@extends ('layout.app')

@section('title')
    Service après-vente - DigiDog
@endsection

@section('content')
    <article id="connexion" class="container-fluid mb-3">
        <div class="row justify-content-center">
            <img id="chiots" src="{{ asset("images/chiots.jpg") }}">
            <h1>Service après-vente</h1>
        </div>
    </article>
    <article id="formulaire" class="container justify-content-center text-center mb-3">
        <h2>Un problème avec votre produit ? Pas de souci !</h2>
        <p>DigiDog prend en charge les retours pendant 2 ans après l'achat.</p>
        <p>Contactez-nous au numéro suivant : </p>
        <p>04 04 04 04 04</p>
        <p>Si des réparations sont nécessaires, envoyez vos produits à :</p>
        <p>Digidog - Service après-vente <br>
            3, rue du Lévrier
            99999 Dogville
        </p>
    </article>
@endsection