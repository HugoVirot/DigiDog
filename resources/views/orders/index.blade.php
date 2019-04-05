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

        @foreach($orders as $order)
            <table class="table">
                <thead>
                <tr>
                    <th>Numéro commande</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$order->order_num}}</td>
                    <td>{{$order->date}}</td>
                </tr>
                </tbody>
            </table>
        @endforeach
    </div>

@endsection