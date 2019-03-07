@extends ('layout.app')

@section('title')
    Produit 1
@endsection

@section('content')
    <div class="container mb-5 bg-success">
                @foreach ($product as $produit)
                    <div class="row text-center mb-4 mt-4 pl-4 pr-4">
                        <div class="col-6">
                            <p>{{ $produit->title }}</p>
                            <p>{{ $produit->description }}</p>
                            <p>{{ $produit->price }}</p>
                        </div>
                        <div class="col-6">
                            <img src="{{ asset("images/$produit->photo") }}">
                        </div>
                    </div>
                @endforeach
    </div>
@endsection