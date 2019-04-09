@extends ('layout.app',['title' => 'Mes commandes'])

@section('content')

    <div class="container">

        <div class="row text-secondary border-bottom mb-4">
            <h1 class="h3">Détails de votre commande</h1>
        </div>
        <div class="row">

            <div class="col-md-8 pb-3">
                <p>Numéro de commande: {{ $order->order_num }}</p>
                <p>Date: {{ $order->date }}</p>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>Article</th>
                    <th>Prix unitaire</th>
                    <th>Quantité</th>
                    <th>Prix total</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order->products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->pivot->price }} €</td>
                    <td>{{ $product->pivot->quantity }}</td>
                    <td>{{ ($product->pivot->quantity * $product->pivot->price) }} €</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection