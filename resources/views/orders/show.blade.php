@extends ('layout.app',['title' => 'Mes commandes'])

@section('content')

    <div class="container">

        <div class="row pb-5">
            <h1>{{$order->name}}</h1>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img class="size-Product img-fluid" src="{{ asset('assets/images/'.$product->image) }}" alt="">
            </div>
            <div class="col-md-8">
                <p>Numéro de commande: {{$order->order_num}}</p>
                <p>Date: {{$order->date}}</p>
                <p>Quantité: {{$order->$product->quantity}}</p>
                <p>Prix: {{$order->$product->price}} euros</p>
            </div>
        </div>
    </div>

@endsection