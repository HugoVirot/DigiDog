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

    <!-- Listing de tout les produits -->

    <main class=" container mb-5">
        <div class="container row justify-content-between text-center ">

            @foreach($products as $product)
                    <div class="mr-3 mt-3">
                        <a href="/catalogue/{{ $product->id }}"><img src="{{ asset("images/$product->image") }}" class="img_catalogue"></a>
                        <h4>{{ $product->nom }} </h4>
                        <p>
                            <small> {{ $product->description }}</small>
                        </p>
                        <p>{{ $product->prix }} EUR</p>
                    </div>
            @endforeach
        </div>
    </main>
@endsection