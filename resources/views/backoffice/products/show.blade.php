@extends ('layout.backoffice')

@section('title')
    Un produit
@endsection

@section('content')
    <div class="text-center mb-5 mt-5">
        <h1>Nom du produit : {{ $product->name }}</h1>
    </div>

    <div class="container text-center">
        <img src="{{ asset("images/tour-connectee.jpg") }}" class="img_catalogue ">
        <h3>Id = {{ $product->id }}</h3>
        <h3>Nom = {{ $product->name }}</h3>
        <h3>Description = {{ $product->description }}</h3>
        <h3>Prix = {{ $product->price }}</h3>
        <h3>Poids = {{ $product->weight }}</h3>
        <h3>Stock = {{ $product->stock }}</h3>
        <h3>Catégorie = {{ $product->category->name }}</h3>
    </div>
    <div class="text-center">
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

@endsection