@extends ('layout.backoffice')

@section('title')
    Ajouter un produit
@endsection

@section('content')
    <div class="text-center mb-5">
        <h1 class="w100 bg-dark text-light text-center mt-3">Ajout Produit</h1>
    </div>

    <div class="container">
        <div class="d-flex justify-content-center text-center">
            <form action="{{ action('Admin\ProductController@store') }}" method="POST">
                @csrf

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <label for="Name">Nom</label>
                    <input class="form-control" type="text" name="name" placeholder="Nom du produit" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="Picture">Image</label>
                    <input class="form-control" type="text" name="picture" placeholder="Image du produit" value="{{ old('picture') }}">
                </div>
                <div class="form-group">
                    <label for="Description">Description</label>
                    <textarea class="form-control" type="text" name="description" rows="3" placeholder="Description du produit" value="{{ old('description') }}"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Prix</label>
                    <input class="form-control" type="number" name="price" placeholder="Prix du produit" value="{{ old('price') }}">
                </div>
                <div class="form-group">
                    <label for="Weight">Poids</label>
                    <input class="form-control" type="number" name="weight" placeholder="Poids du produit" value="{{ old('weight') }}">
                </div>
                <div class="form-group">
                    <label for="Stock">Stock</label>
                    <input class="form-control" type="number" name="stock" placeholder="Stock du produit" value="{{ old('stock') }}">
                </div>
                <div class="form-group">
                    <label for="Category_id">Categorie</label>
                    <select name="category_id" class="form-control" id="category_id">
                        <option value="1">Traceur GPS</option>
                        <option value="2">Caméra</option>
                        <option value="3">Capteur d'activité</option>
                        <option value="4">Distributeur</option>
                    </select>
                </div>
                <button class="btn btn-primary-bis" type="submit">Ajouter un produit</button>
            </form>
        </div>

    </div>

@endsection
