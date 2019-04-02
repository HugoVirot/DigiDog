@extends ('layout.app')

@section('title')
    Mon panier
@endsection



@section('content')

    <div class="container-fluid mb-5">
        <div class="col-12 row">
            <h3 class="col-12">Votre panier</h3>

            <div class="col-12 row">
                <div class="col-9 row">
                    <div class="col-9 align-self-center">
                        <div class="d-flex justify-content-between">
                            <img src="{{ asset("images/tour-connectee.jpg") }}" class="img_catalogue">
                            <p class="align-self-center">Caméra connecté TowerWood</p>
                            <p class="align-self-center">149,90 EUR</p>
                        </div>
                    </div>

                    <div class="col-3 text-center align-self-center">
                        <form method="POST">
                            <input class="col-3" type="number" id="quantite" name="quantite" value="1">
                            <button type="button" class="btn btn-primary-bis">Modifier la quantité</button>
                        </form>
                        <button type="button" class="btn btn-primary-bis">Supprimer</button>
                    </div>
                </div>


                <aside class="col-3">
                    <div class="bg-success p-4 text-center">
                        <h3>Récapitulatif</h3>
                        <p>Sous total :</p>
                        <p>Frais de port :</p>
                        <p>Total :</p>
                        <button type="button" class="btn btn-primary-bis">Paiement</button>
                    </div>

                </aside>
            </div>
        </div>
    </div>



@endsection