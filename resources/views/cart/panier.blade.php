@extends ('layout.app')

@section('title')
    Mon panier
@endsection



@section('content')

    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-9 ">
                <h3 class="col-auto">Votre panier</h3>

                <div class="row">

                    <div class="mr-5 mt-5 col-9 ">
                        <div class=" d-flex justify-content-between">
                            <img src="{{ asset("images/tour-connectee.jpg") }}" class="img_catalogue">
                            <p class="align-self-center">Caméra connecté TowerWood</p>
                            <p class="align-self-center">149,90 EUR</p>
                        </div>
                    </div>

                    <div class=" text-center col-auto align-self-center">
                        <form method="POST">
                            <input class="form-control" type="number" id="quantite" name="quantite" value="1">
                            <button type="button" class="btn btn-primary mt-2 col-8">Modifier la quantité</button>
                        </form>
                        <button type="button" class="btn btn-primary">Supprimer</button>
                    </div>
                </div>

                <div class="row">

                    <div class="mr-5 mt-5 col-9 ">
                        <div class=" d-flex justify-content-between">
                            <img src="{{ asset("images/tour-connectee.jpg") }}" class="img_catalogue">
                            <p class="align-self-center">Caméra connecté TowerWood</p>
                            <p class="align-self-center">149,90 EUR</p>
                        </div>
                    </div>

                    <div class=" text-center col-auto align-self-center">
                        <form method="POST">
                            <input class="form-control" type="number" id="quantite" name="quantite" value="1">
                            <button type="button" class="btn btn-primary mt-2 col-8">Modifier la quantité</button>
                        </form>
                        <button type="button" class="btn btn-primary">Supprimer</button>
                    </div>
                </div>

                <div class="row">

                    <div class="mr-5 mt-5 col-9 ">
                        <div class=" d-flex justify-content-between">
                            <img src="{{ asset("images/tour-connectee.jpg") }}" class="img_catalogue">
                            <p class="align-self-center">Caméra connecté TowerWood</p>
                            <p class="align-self-center">149,90 EUR</p>
                        </div>
                    </div>

                    <div class=" text-center col-auto align-self-center">
                        <form method="POST">
                            <input class="form-control" type="number" id="quantite" name="quantite" value="1">
                            <button type="button" class="btn btn-primary mt-2 col-8">Modifier la quantité</button>
                        </form>
                        <button type="button" class="btn btn-primary">Supprimer</button>
                    </div>
                </div>

                <div class="row">

                    <div class="mr-5 mt-5 col-9 ">
                        <div class=" d-flex justify-content-between">
                            <img src="{{ asset("images/tour-connectee.jpg") }}" class="img_catalogue">
                            <p class="align-self-center">Caméra connecté TowerWood</p>
                            <p class="align-self-center">149,90 EUR</p>
                        </div>
                    </div>

                    <div class=" text-center col-auto align-self-center">
                        <form method="POST">
                            <input class="form-control" type="number" id="quantite" name="quantite" value="1">
                            <button type="button" class="btn btn-primary mt-2 col-8">Modifier la quantité</button>
                        </form>
                        <button type="button" class="btn btn-primary">Supprimer</button>
                    </div>
                </div>

            </div>

            <aside class="col-3">
                <div class="bg-success p-4 text-center">
                    <h3>Récapitulatif</h3>
                    <p>Sous total :</p>
                    <p>Frais de port :</p>
                    <p>Total :</p>
                    <button type="button" class="btn btn-primary">Paiement</button>
                </div>

            </aside>
        </div>

    </div>



@endsection