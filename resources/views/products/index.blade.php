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


            @if(isset($_GET['tri']) && $_GET['tri'] == 'name')

                @foreach($products_name as $product_name)

                    <div class="mr-5 mt-3">
                        <a href="{{ '/catalogue/' . $product_name->id }}"><img
                                    src="{{ asset("images/tour-connectee.jpg") }}" class="img_catalogue"></a>
                        <h4><a href="{{ '/catalogue/' . $product_name->id }}">{{ $product_name->name }}</a></h4>
                        <h3>{{$product_name->price}} EUR</h3>
                        <p>
                            <small maxlength>{{ $product_name->description }}</small>
                        </p>
                    </div>

                @endforeach

            @elseif(isset($_GET['tri']) && $_GET['tri'] == 'price')

            @foreach ($products_price as $product_price)

                <div class="mr-5 mt-3">
                    <a href="{{ '/catalogue/' . $product_price->id }}"><img
                                src="{{ asset("images/tour-connectee.jpg") }}"
                                class="img_catalogue"></a>
                    <h4><a href="{{ '/catalogue/' . $product_price->id }}">{{ $product_price->name }}</a></h4>
                    <h3>{{$product_price->price}} EUR</h3>
                    <p>
                        <small maxlength>{{ $product_price->description }}</small>
                    </p>
                </div>
            @endforeach

            @else
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

            @endif


        </div>
    </main>
@endsection