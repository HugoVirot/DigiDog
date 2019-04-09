@extends ('layout.app')

@section('title')
    Catalogue
@endsection

@section('content')



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

            @foreach ($category->products as $product)


                    <div class="mr-5 mt-3">
                        <a href="{{ route('voir_Produit', $product->id) }}"><img
                                    src="{{ asset("images/tour-connectee.jpg") }}"
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