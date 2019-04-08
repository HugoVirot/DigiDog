@extends('layout.app', ['title' => 'Votre Panier'])
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
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="Checkbox1"
                                       value="option3" checked>
                                <label class="custom-control-label" for="Checkbox1"></label>
                                <img class="w-25" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRADPSpvxc9T6Uz1P31xVSoSO8fxtpzmff6ZXHnHj-_bE71D4IHFg">
                            </div>

                    </th>
                    <th>Payer par carte bancaire</th>
                </tr>
                <tr>
                    <th>


                    </th>
                    <th>
                        <form action="{{route('panier.addOrder')}}"  method="post">
                            @csrf
                        <button type="submit"  class="btn btn-outline-primary" aria-pressed="true">PAYER</button>
                        </form>
                    </th>
                </tr>
            </table>
            <div class="row">
                <div class="col">
                    Récapitulatif commande
                </div>
                @if(count($products ) > 0 )
                    <nav class="breadcrumb mt-2">
                        <span class="breadcrumb-item active text-primary">RECAPITULATIF DE COMMANDE</span>
                        <a class="breadcrumb-item text-dark">IDENTIFICATION</a>
                        <a class="breadcrumb-item text-dark">ADRESSE</a>
                        <a class="breadcrumb-item text-dark">FRAIS DE PORT</a>
                        <a class="breadcrumb-item text-dark">PAIEMENT</a>
                    </nav>
                    <div class="row bg-primary text-white justify-content-start py-2">
                        <div class="col-sm-12 ">
                            <h1 class="h5 my-auto">COMMANDE</h1>
                        </div>
                    </div>
                    <div class="row mt-3 w-100">
                        <table class="table ">
                            <thead class="bg-dark table-bordered">
                            <tr>
                                <th class="text-white text-left" scope="col">ARTICLE</th>
                                <th class="text-white text-center" scope="col">PRIX</th>
                                <th class="text-white text-center" scope="col">QUANTITE</th>
                                <th class="text-white text-center" scope="col">TOTAL</th>
                                <th class="text-white" scope="col"></th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($products as $key => $product)

                                <tr class="border-bottom">
                                    <td>
                                        <img class="w-25"
                                             src="{{asset("images/".$product->picture)}}"
                                             alt="product image">
                                        <a class="text-decoration-none text-primary"
                                           href="nom de l'article">{{$product->name}}</a>
                                    </td>

                                    <td class="text-center">{{$product->price}} €</td>

                                    <td class="text-center">
                                        <input type="number" step="1" value="{{$qts[$key]}}" name="{{$product->id}}"
                                               class="form-control"
                                               min="0" max="100">
                                    </td>

                                    <td class="text-center">{{$sommesLigne[$key]}} €</td>

                                    <td class="text-center">
                                        <a href="{{route('panier.remove.product',[$product->id])}}" class="btn btn-danger"
                                           name="supprimer_produit">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>

                    <div class="container mb-2">

                        <div class="row">
                            <div class="col-lg-10 d-flex justify-content-end ">
                                <h5 class="">Total produit HT: </h5>
                            </div>
                            <div class="col-lg-2 d-flex justify-content-end ">
                                <h3> {{$total}} €</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-10 d-flex justify-content-end ">
                                <h5 class="">Frais de port: </h5>
                            </div>
                            <div class="col-lg-2 d-flex justify-content-end ">
                                <h3> {{$frais}} €</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-10 d-flex justify-content-end ">
                                <h5 class="">Total produit TTC: </h5>
                            </div>
                            <div class="col-lg-2 d-flex justify-content-end ">
                                <h3> {{$total + $frais}} €</h3>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="row pt-5">
            <div class="col d-flex justify-content-start ">
                <a href="{{route('panier.adresse1')}}" class="btn btn-outline-primary" role="button"
                   aria-pressed="true">PRECEDENT</a>
            </div>
        </div>
    </main>

@endsection
