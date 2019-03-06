@extends ('layout.app')

@section('title')
    Service après-vente - DigiDog
@endsection

@section('content')
    <article id="sav" class="container-fluid mb-3">
        <div class="row justify-content-center">
            <img id="chiencle" src="{{ asset("images/chiencle.jpg") }}">
            <h1>Service après-vente</h1>
        </div>
    </article>
    <article id="formulaire" class="container justify-content-center text-center mb-3">
        <h2>Un problème avec votre produit ? Pas de souci !</h2>
        <p>DigiDog prend en charge les retours <strong>pendant 2 ans après l'achat.</strong></p>
        <p>Contactez-nous au numéro suivant<br>
            (du lundi au samedi, de 9h00 à 20h00) :</p>
        <p id="numero">04 04 04 04 04</p>
        <p>Si des réparations sont nécessaires, envoyez vos produits à :</p>
        <p id="numero">Digidog - Service après-vente <br>
            3, rue du Lévrier <br>
            99999 DOGVILLE
        </p>
    </article>
@endsection