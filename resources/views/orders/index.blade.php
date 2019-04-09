@extends ('layout.app')

@section('title')
    Mes commandes - DigiDog
@endsection

@section('content')
    <div id="photo" class="container-fluid mb-3">
        <div class="row justify-content-center">
            <img class="img-responsive" id="chienordi" src="{{ asset("images/chienordi.jpg") }}">
        </div>
    </div>

    <div id="commandes" class="container justify-content-center text-center mt-3 mb-3">


        <table class="table">
            <thead>
            <tr>
                <th>Numéro de commande</th>
                <th>Date</th>
            </tr>
            </thead>
            @foreach($orders as $order)
                <tbody>
                <tr>
                    <td><a href="{{route('orders.show',$order)}}"> {{$order->order_num}}</a></td>
                    <td>{{$order->date}}</td>
                </tr>
                </tbody>
            @endforeach
        </table>

    </div>

@endsection