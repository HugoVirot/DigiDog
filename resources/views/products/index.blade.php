@extends ('layout.app')

@section('title')
    Catalogue
@endsection

@section('content')



    <!-- Bandeau des catégories -->
    <div class="container-fluid mb-5 bg-success">
        <div class="row text-center mb-4 mt-4">
            <div class="col-3">
                <h3>Traceur GPS</h3>
                <a href="#"><img src="{{ asset("images/sante.jpg") }}" class="img_categorie rounded-circle"></a>
            </div>
            <div class="col-3">
                <h3>Caméra</h3>
                <a href="#"><img src="{{ asset("images/sante.jpg") }}" class="img_categorie rounded-circle"></a>
            </div>
            <div class="col-3">
                <h3>Capteur d'activité</h3>
                <a href="#"><img src="{{ asset("images/sante.jpg") }}" class="img_categorie rounded-circle"></a>
            </div>
            <div class="col-3">
                <h3>Distributeur</h3>
                <a href="#"><img src="{{ asset("images/sante.jpg") }}" class="img_categorie rounded-circle"></a>
            </div>
        </div>
    </div>

    <!-- Listing de tous les produits -->
    <main class=" container mb-5">
        <div class="container row justify-content-between text-center ">

            @foreach ($products as $product)

                <div class="mr-3 mt-3">
                    <img src="{{ asset("images/tour-connectee.jpg") }}" class="img_catalogue">
                    <p>Produit n°{{ $product->id }}</p>
                    <h4><a href="{{ '/catalogue/' . $product->id }}">{{ $product->nom }}</a></h4>
                    <h4>{{ $product->description }}</h4>
                    <h3>{{$product->prix}}</h3>
                    <p>
                        <small> Super produit vraiment  génial</small>
                    </p>
                </div>
            @endforeach

        </div>
    </main>
@endsection