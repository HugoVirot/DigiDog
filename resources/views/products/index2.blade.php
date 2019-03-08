@extends ('layout.app')

@section('title')
    Catalogue
@endsection

@section('content')
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

    <div class="container mb-5 bg-success">
            <div>
                 @foreach ($products as $produit)
                    <div class="row text-center mb-4 mt-4 pl-4 pr-4">
                        <div class="col-6">

                    <p>{{ $produit->title }}</p>
                    <p>{{ $produit->description }}</p>
                    <p>{{ $produit->price }}</p>
                        </div>
                        <div class="col-6">
                    <a href="/catalogue/{{ $produit->id }}"><img src="{{ asset("images/$produit->photo") }}"></a>
                        </div>
                    </div>
                 @endforeach
            </div>
    </div>
@endsection