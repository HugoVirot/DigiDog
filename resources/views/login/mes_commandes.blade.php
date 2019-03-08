@extends ('layout.app')

@section('title')
    Mes commandes - DigiDog
@endsection

@section('content')
    <article id="photo" class="container-fluid mb-3">
        <div class="row justify-content-center">
            <img class="img-responsive" id="chienordi" src="{{ asset("images/chienordi.jpg") }}">
        </div>
    </article>

    <article id="commandes" class="container justify-content-center text-center mt-3 mb-3"><!-- <form></form> -->

        <table class="table">
            <tr>
                <th>Date / heure</th>
                <th>Numéro</th>
                <th>Montant</th>
                <th>Articles</th>
                <th>Quantité</th>
                <th>Statut</th>
            </tr>
            <tr>
                <td>07/03/19 - 19h32</td>
                <td>5468732105</td>
                <td>129,99 €</td>
                <td>Traceur GPS<br>
                    Capteur d'activité<br>
                    Tour connectée</td>
                <td>2<br>1<br>1</td>
                <td>Expédiée</td>
            </tr>
            <tr>
                <td>01/03/19 - 14h18</td>
                <td>0168944325</td>
                <td>19,99 €</td>
                <td>Boitier connecté</td>
                <td>1</td>
                <td>Expédiée</td>
            </tr>
            <tr>
                <td>25/02/19 - 14h07</td>
                <td>7932256001</td>
                <td>79.90 €</td>
                <td>Distributeur</td>
                <td>1</td>
                <td>Expédiée</td>
            </tr>
        </table>
    </article>

@endsection