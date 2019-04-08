@extends('layout.app', ['title' => 'Votre Panier'])

@section('content')
    <main class="container border mt-5 mb-5">
        <nav class="breadcrumb mt-2">
            <a class="breadcrumb-item text-dark">RECAPITULATIF DE COMMANDE</a>
            <span class="breadcrumb-item active text-primary">IDENTIFICATION</span>
            <a class="breadcrumb-item text-dark">ADRESSE</a>
            <a class="breadcrumb-item text-dark">FRAIS DE PORT</a>
            <a class="breadcrumb-item text-dark">PAIEMENT</a>
        </nav>
        <div class="row bg-secondary text-white justify-content-start py-2">
            <div class="col-sm-12 ">
                <h1 class="h5 my-auto">IDENTIFICATION</h1>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <span class="text-primary">DÉJÀ INSCRIT?</span>

                <form action="{{ route('login') }}" method="post">

                        <button type="submit" name="submitCreationCompte" class="btn btn-primary w-100">
                            IDENTIFICATION
                        </button>

                </form>
            </div>
            <div class="col-lg-6 d-flex flex-column ">
                <span class="text-primary">CRÉEZ VOTRE COMPTE</span>
                <a href="{{route('register')}}" class="btn btn-outline-primary" role="button" aria-pressed="true">CRÉEZ VOTRE COMPTE</a>

            </div>
        </div>
        <div class="row pt-3">
            <div class="col d-flex justify-content-start ">
                <a href="{{route('panier.recapitulatif')}}" class="btn btn-outline-primary" role="button" aria-pressed="true">PRECEDENT</a>
            </div>
        </div>
    </main>

@endsection
