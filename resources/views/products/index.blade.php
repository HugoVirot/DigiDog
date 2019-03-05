@extends ('layout.app')

@section('title')
    Catalogue
@endsection

@section('content')

    <!-- Bandeau des catégories -->
    <div class="container-fluid mb-5">
        <div class="row text-center">
            <div class="col-3">
                <h3>Traceur GPS</h3>
                <img src="{{ asset("images/sante.jpg") }}" class="img_categorie">
            </div>
            <div class="col-3">
                <h3>Caméra</h3>
                <img src="{{ asset("images/sante.jpg") }}" class="img_categorie">
            </div>
            <div class="col-3">
                <h3>Capteur d'activité</h3>
                <img src="{{ asset("images/sante.jpg") }}" class="img_categorie">
            </div>
            <div class="col-3">
                <h3>Distributeur</h3>
                <img src="{{ asset("images/sante.jpg") }}" class="img_categorie">
            </div>
        </div>
    </div>

    <!-- Listing de tout les produits -->
    <main class="mb-5">

    </main>
@endsection