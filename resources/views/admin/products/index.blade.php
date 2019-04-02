@extends ('layout.backoffice')

@section('title')
    Voir le catalogue
@endsection

@section('content')
    <div class="text-center">
        <h1>Accueil de la page de création d'un produit</h1>
    </div>

    <div class="text-center mt-3">
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary-bis">Ajouter un produit</a>
    </div>

    <div class="container ">

        @foreach ($products as $product)
            <div class="container-fluid row text-center">
                <div class="row container-fluid justify-content-between d-flex">
                    <img src="{{ asset("images/tour-connectee.jpg") }}" class="img_catalogue ">
                    <h4 class="align-self-center"><a href="{{ '/admin/products/' . $product->id }}">{{ $product->name }}</a>
                    </h4>
                    <h3 class="align-self-center">{{$product->price}} EUR</h3>
                    <div class="align-self-center">
                        <form action="{{ route('admin.products.edit', [$product]) }}" method="GET">
                            <button class="btn btn-primary" type="submit">Modifier</button>
                        </form>
                    </div>
                    <div class="align-self-center">
                        <form action="{{ route('admin.products.destroy', $product) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="d-flex justify-content-center mt-3 mb-5">
            {{ $products->links() }}
        </div>
    </div>

@endsection