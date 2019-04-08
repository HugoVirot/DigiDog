@extends ('layout.app',['title' => 'Mes commandes'])

@section('content')

    <div class="container">

        <div class="row pb-5">
            <h1></h1>
        </div>
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-8">
                <p>Numéro de commande: {{ $order->order_num }}</p>
                <p>Date: {{ $order->date }}</p>
            </div>
            <table class="table">
                <tbody>
                @foreach($order->products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->pivot->price }}</td>
                    <td>{{ $product->pivot->quantity }}</td>
                    <td>{{ ($product->pivot->quantity * $product->pivot->price) }} €</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection