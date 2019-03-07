@extends ('layout.app')

@section('title')
   {{ $product->nom }}
@endsection



@section('content')

    <div class="container mb-5">
        <div class="row mb-5">
            <div class="col-md-6 mt-2">
                <img src="{{ asset("images/$product->image") }}" class="img_produit ">
            </div>

            <div class="col-md-6">
                <h1>{{ $product->nom }}</h1>
                <h2>{{ $product->categorie }}</h2>
                <h3>{{ $product->prix }} € + frais de livraison</h3>

                <p>{{ $product->description }}</p>
                <div class="form-inline">
                    <input class="form-control mr-3" value="1" type="number" id="tentacles" name="tentacles"
                           min="0" max="10">
                    <button type="button" class="btn btn-primary">Ajoutez au panier</button>
                </div>


            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4 text-center align-self-center ">
                <h4>Excellent produit pour mon chien !</h4>
                <p>"Un parfait mélange de précision et d’autonomie de la batterie. Bien sûr on a aussi l’option de Suivi
                    en Direct..... qui nous dit, comme le nom le dit ou est ton animal en ce moment."</p>
                <p>Marlene, 33 ans, tain l'Hermitage.</p>
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