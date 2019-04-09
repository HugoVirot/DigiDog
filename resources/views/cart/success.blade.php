@extends('layout.app', ['title' => 'Home'])
@section('content')
<div class="container">
    <div class="row d-flex flex-column justify-content-center align-content-center text-center">
        <div class="col-sm-12 p-5">
            <span class="h1  text-center p-5">votre commande à bien été enregistrée</span>
            <h2 class="p-5 bg-dark rounded mt-5"><a  href="{{route('orders.index')}}">Visualisez Votre Commande</a></h2>
        </div>
    </div>
</div>

@endsection