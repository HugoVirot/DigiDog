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

    <!-- Bouton de tri -->
    <div>
        <form action="" method="POST">
            <button type="button" class="btn btn-primary-bis">Trier par nom</button>
            <button type="button" class="btn btn-primary-bis">Trier par prix croissant</button>
        </form>
    </div>

    <!-- Listing de tous les produits -->
    <main class=" container mb-5">
        <div class="container row justify-content-between text-center ">

            @foreach ($products as $product)

                <div class="mr-5 mt-3">
                    <a href="{{ '/catalogue/' . $product->id }}"><img src="{{ asset("images/tour-connectee.jpg") }}"
                                                                      class="img_catalogue"></a>
                    <h4><a href="{{ '/catalogue/' . $product->id }}">{{ $product->name }}</a></h4>
                    <h3>{{$product->price}} EUR</h3>
                    <p>
                        <small maxlength>{{ $product->description }}</small>
                    </p>
                </div>
            @endforeach

        </div>
    </main>
@endsection