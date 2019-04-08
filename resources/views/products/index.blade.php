@extends ('layout.app')

@section('title')
    Catalogue
@endsection

@section('content')

    <!-- Bandeau des catégories -->
    <div class="container-fluid mb-5 bg-success">
        <div class="row text-center mb-4 mt-4">

            @foreach($categories as $category)
                {{--dd($category)--}}
            <div class="col-3">
                <h3>{{$category->name}}</h3>
                <a href="{{ route('categories.show', $category) }}"><img src="{{ asset("images/sante.jpg") }}" class="img_categorie rounded-circle"></a>
            </div>
           @endforeach
        </div>
    </div>

    <!-- Bouton de tri -->
    <div class="container text-center">
        <form action="" method="GET">
            <button type="submit" value="name" name="tri" class="btn btn-primary-bis">Trier par nom</button>
            <button type="submit" value="price" name="tri" class="btn btn-primary-bis">Trier par prix croissant</button>
            <button type="submit" value="none" name="tri" class="btn btn-primary-bis">Pas de tri</button>
        </form>
    </div>

    <!-- Listing de tous les produits -->
    <main class=" container mb-5">
        <div class="container row justify-content-between text-center ">

            @foreach ($products as $product)

                <div class="mr-5 mt-3">
                    <a href="{{ route('voir_Produit', $product->id) }}"><img src="{{ asset("images/tour-connectee.jpg") }}"
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