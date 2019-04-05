@extends ('layout.app')

@section('title')
    wafwaf gps
@endsection



@section('content')

    <div class="container mb-5">
        <div class="row mb-5">
            <form action="{{route('productAddToCart' , [$product])}}" method="post" >
                @csrf
                <div class="col-md-6 mt-2">
                    <img src="{{ asset('images/photo_produit.jpeg') }}" class="photo_produit ">
                </div>

                <div class="col-md-6">
                    <h1>{{ $product->name }}</h1>

                    <h3>{{ $product->price }} € + frais de livraison</h3>

                    <p>{{ $product->description }}</p>

                        <input class="form-control mr-3" type="number" id="nbProduct" name="nbProduct"
                               min="0" max="{{$product->stock}}">
                        <button class="btn btn-primary-bis" type="submit">Ajoutez au panier</button>
                </div>
            </form>
            @IF (session()->has('state'))
                <div class="{{Session::get('color')}} text-center p-3 mt-5 mb-5 toaster-info d-flex justify-content-center align-content-center">
                    <p>
                    <h3 class="text-light"> {{ Session::get('state') }}</h3></p>
                </div>
                {{session()->forget(['state', 'color'])}}
            @endif



        </div>
    </div>

    {{Session::get('panier')}}





    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4 text-center align-self-center ">
                <h4>Excellent produit pour mon chien !</h4>
                <p>"Un parfait mélange de précision et d’autonomie de la batterie. Bien sûr on a aussi l’option de Suivi
                    en Direct..... qui nous dit, comme le nom le dit ou est ton animal en ce moment."</p>
                <p>Marlene, 33 ans, Tain l'Hermitage.</p>
            </div>
            <div class="col-md-4 text-center align-self-center">
                <h4>Trés bon gps</h4>
                <p>"Lorsque ma chienne s'est échappée, le tractive a été très rapide à la localiser et je l'ai retrouvée
                    pile à l'endroit où l'indiquait le traceur (à 2 mètres près)."</p>
                <p>Arthur, 37 ans, Paris</p>
            </div>
            <div class="col-md-4 text-center align-self-center">
                <h4>Super produit</h4>
                <p>"Produit excellent . Ne pas oublier de l'allumer. Trace votre chien et votre position à 1 m près et
                    en fond le plan de l'endroit où on se trouve. Bien le périmètre de sécurité qui déclenche
                    l'alarme."</p>
                <p>Antoine, 21 ans, Crest.</p>

            </div>

        </div>
    </div>


@endsection