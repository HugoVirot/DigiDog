@extends('layout.app', ['title' => 'Votre Panier'])


@section('content')

    <main class="container border mt-5 mb-5">
        <nav class="breadcrumb mt-2">
            <a class="breadcrumb-item text-dark">RECAPITULATIF DE COMMANDE</a>
            <a class="breadcrumb-item text-dark">IDENTIFICATION</a>
            <a class="breadcrumb-item text-dark">ADRESSE</a>
            <span class="breadcrumb-item active text-primary">FRAIS DE PORT</span>
            <a class="breadcrumb-item text-dark">PAIEMENT</a>
        </nav>
        <div class="row bg-secondary text-white justify-content-start py-2">
            <div class="col-sm-12 ">
                <h1 class="h5 my-auto">FRAIS DE PORT</h1>
            </div>
        </div>

        <div class="livraison container justify-content-center mt-4 mb-4">
            <a><strong>Choisissez votre mode de livraison</strong></a>


            <a>Choississez une option de livraison pour l'adresse : Mon adresse</a>

            <div class="mt-4 choix container row justify-content-center">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Transport</th>
                        <th scope="col">Délais</th>
                        <th scope="col">Prix</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">
                            <form>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="Checkbox1"
                                           value="option1">
                                    <label class="custom-control-label" for="Checkbox1">
                                        <a> transporteur 1</a></label>
                                    <i class="fas fa-shipping-fast"></i>
                                </div>
                            </form>
                        </th>
                        <td>3-4 jours</td>
                        <td>8,00 € HT</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <form>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="Checkbox2"
                                           value="option2">
                                    <label class="custom-control-label" for="Checkbox2">
                                        <a> transporteur 1</a></label>
                                    <i class="fas fa-shipping-fast"></i>
                                </div>
                            </form>
                        </th>
                        <td>4-5 jours</td>
                        <td>6,00 € HT</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <form>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="Checkbox3"
                                           value="option3">
                                    <label class="custom-control-label" for="Checkbox3">
                                        <a> transporteur 1</a></label>
                                    <i class="fas fa-shipping-fast"></i>
                                </div>
                            </form>
                        </th>
                        <td>5-7 jours</td>
                        <td>4,00 € HT</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="custom-control custom-checkbox mb-5">
                <h1 class="h5">Conditions générales de vente</h1>
                <form>
                    <input class="custom-control-input" type="checkbox" id="Checkbox4" value="option4">

                    <label class="custom-control-label mt-2" for="Checkbox4"> J'ai lu et j'accepte les conditions
                        générales
                        de
                        vente
                        et j'y adhère sans réserve. <strong>(Lire les Conditions Générales de Vente)</strong> </label>

                    <input type="submit" class="ml-3 btn btn-primary" value="ACCEPTER">

                </form>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col d-flex justify-content-start ">
                <a href="{{route('panier.adresse1')}}" class="btn btn-outline-primary" role="button"
                   aria-pressed="true">PRECEDENT</a>
            </div>
        </div>
    </main>

@endsection
