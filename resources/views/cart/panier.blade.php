@extends('layout.app', ['title' => 'Home'])
@section('content')
    @IF (session()->has('state'))
        <div class="{{Session::get('color')}} text-center p-3 mt-5 mb-5 toaster-info d-flex justify-content-center align-content-center">
            <p>
            <h3 class="text-light"> {{ Session::get('state') }}</h3></p>
        </div>
        {{session()->forget(['state', 'color'])}}
    @endif
    <form action="{{ route('panier.recalcule') }}" method="post">
        @csrf
        <main class="container mt-5 mb-5">
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

                    <div class="row pt-5">
                        <div class="col d-flex justify-content-start ">
                            <a href="{{route('home')}}" class="btn btn-outline-primary" role="button"
                               aria-pressed="true">CONTINUER
                                MES ACHATS</a>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <input class="btn btn-primary" type="submit" value="Recalculer le panier" name="recalcul">
                            <a href="{{ route('panier.identification') }}" lass="btn btn-primary ml-3"  value="COMMANDER" name="commander">COMMANDER</a>
                        </div>

                    </div>

                </div>
            @else

                <div class="row d-flex justify-content-center align-items-center">
                    <h1>Votre panier est vide.</h1>
                </div>
                <div class="row d-flex justify-content-center align-items-center">
                    <img src="{{asset("images/paniervide.jpeg")}}" alt="paniervide">
                </div>

            @endif
        </main>
    </form>



@endsection

