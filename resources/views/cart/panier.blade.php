@extends('layout.app', ['title' => 'Home'])
@section('content')

    <form action="{{ route('panier.identification') }}" method="post">
        @csrf
        <main class="container mt-5 mb-5">
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
            <div class="row mt-3">
                <table class="table">
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
                                <input type="number" step="1" value="{{$qts[$key]}}" name="produit_quantite"
                                       class="form-control"
                                       min="0" max="100">
                            </td>

                            <td class="text-center">{{$sommesLigne[$key]}} €</td>

                            <td class="text-center">
                                <button class="btn btn-danger" type="submit" name="supprimer_produit">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

            <div class="container mb-2">

                <div class="row">
                    <div class="col-lg-10 d-flex justify-content-end ">
                        <h5 class="">Total produit HT: {{$total}}</h5>
                    </div>
                    <div class="col-lg-2 d-flex justify-content-end ">
                        <h5>€</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 d-flex justify-content-end ">
                        <h5 class="">Frais de port:</h5>
                    </div>
                    <div class="col-lg-2 d-flex justify-content-end ">
                        <h5>€</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 d-flex justify-content-end ">
                        <h5 class="">Total TTC:</h5>
                    </div>
                    <div class="col-lg-2 d-flex justify-content-end ">
                        <h5>€</h5>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col d-flex justify-content-start ">
                        <a href="{{route('home')}}" class="btn btn-outline-primary" role="button" aria-pressed="true">CONTINUER
                            MES ACHATS</a>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <input class="btn btn-primary" type="submit" value="COMMANDER" name="recalcul">
                    </div>

                </div>

            </div>
        </main>
    </form>



@endsection

