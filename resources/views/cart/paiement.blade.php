@extends('layouts.app', ['title' => 'Votre Panier'])
@section('content')


    <main class="container border mt-5 mb-5">
        <nav class="breadcrumb mt-2">
            <a class="breadcrumb-item text-dark">RECAPITULATIF DE COMMANDE</a>
            <a class="breadcrumb-item text-dark">IDENTIFICATION</a>
            <a class="breadcrumb-item text-dark">ADRESSE</a>
            <a class="breadcrumb-item text-dark">FRAIS DE PORT</a>
            <span class="breadcrumb-item active text-primary">PAIEMENT</span>
        </nav>
        <div class="row bg-secondary text-white justify-content-start py-2">
            <div class="col-sm-12 ">
                <h1 class="h5 my-auto">PAIEMENT</h1>
            </div>
        </div>

        <div class="livraison container justify-content-center mt-4 mb-4">
            <strong>Choisissez votre mode de paiement</strong>
            <table class="table">
                <tr>
                    <th>
                        <form>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="Checkbox1"
                                       value="option3">
                                <label class="custom-control-label" for="Checkbox1"></label>
                                <img class="w-25" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRADPSpvxc9T6Uz1P31xVSoSO8fxtpzmff6ZXHnHj-_bE71D4IHFg">
                            </div>
                        </form>
                    </th>
                    <th>Payer par carte bancaire</th>
                </tr>
                <tr>
                    <th>
                        <form>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="Checkbox2"
                                       value="option3">
                                <label class="custom-control-label" for="Checkbox2"></label>
                                <img class="imgPaiement" src="http://assets.stickpng.com/thumbs/580b57fcd9996e24bc43c530.png">
                            </div>
                        </form>
                    </th>
                    <th>Payer par Paypal</th>
                </tr>
                <tr>
                    <th>
                        <form>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="Checkbox3"
                                       value="option3">
                                <label class="custom-control-label" for="Checkbox3"></label>
                                <img class="imgPaiement" src="https://particuliers.attijariwafabank-europe.fr/uploads/extra/58e66b0b86da6_cheque_classique.png">
                            </div>
                        </form>
                    </th>
                    <th>Payer par chèque</th>
                </tr>
                <tr>
                    <th>
                        <form>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="Checkbox4"
                                       value="option3">
                                <label class="custom-control-label" for="Checkbox4"></label>
                                <img class="w-25" src="https://www.paytutor.com/img/virement.png">
                            </div>
                        </form>
                    </th>
                    <th>Payer par virement</th>
                </tr>










            </table>

        </div>
        <div class="row pt-5">
            <div class="col d-flex justify-content-start ">
                <a href="{{route('panier.adresse2')}}" class="btn btn-outline-primary" role="button"
                   aria-pressed="true">PRECEDENT</a>
            </div>
        </div>
    </main>

@endsection