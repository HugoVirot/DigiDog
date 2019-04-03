@extends ('layout.backoffice')

@section('title')
    Edition d'un artcile
@endsection

@section('content')
    <div class="text-center mb-3">
        <h1 class="w100 bg-dark text-light text-center mt-3">Update Produit</h1>
    </div>

    <div class="container mb-5">
        <div class="d-flex justify-content-center text-center">
            <form action="{{ route('admin.products.update', $product) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group text-center">
                    <h1>Id : {{$product->id}}</h1>
                    <h3>Nom</h3>
                    <label for="name">{{$product->name}}</label>
                    <input class="form-control" type="text" name="name" value="{{$product->name}}">
                </div>

                <div class="form-group text-center">
                    <h3>Image</h3>
                    <label for="picture">{{$product->picture}}</label>
                    <input class="form-control" type="text" name="picture" value="{{$product->picture}}">
                </div>

                <div class="form-group text-center">
                    <h3>Description</h3>
                    <label for="description">{{$product->description}}</label>
                    <input class="form-control" type="text" name="description" value="{{$product->description}}">
                </div>

                <div class="form-group text-center">
                    <h3>Prix</h3>
                    <label for="price">{{$product->price}}</label>
                    <input class="form-control" type="text" name="price" value="{{$product->price}}">
                </div>

                <div class="form-group text-center">
                    <h3>Poids</h3>
                    <label for="weight">{{$product->weight}}</label>
                    <input class="form-control" type="text" name="weight" value="{{$product->weight}}">
                </div>

                <div class="form-group text-center">
                    <h3>Stock</h3>
                    <label for="stock">{{$product->stock}}</label>
                    <input class="form-control" type="text" name="stock" value="{{$product->stock}}">
                </div>

                <div class="form-group text-center">
                    <h3>Id de catégorie</h3>
                    <label for="stock">{{$product->category_id}}</label>
                    <select name="category_id" class="form-control" id="category_id">
                        <option value="1">Traceur GPS (id=1)</option>
                        <option value="2">Caméra (id=2)</option>
                        <option value="3">Capteur d'activité (id=3)</option>
                        <option value="4">Distributeur (id=4)</option>
                    </select>
                </div>
                <button class="btn btn-primary-bis" type="submit">Modifier</button>
            </form>
        </div>
    </div>

@endsection
