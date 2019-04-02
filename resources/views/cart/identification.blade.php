@extends('layouts.app', ['title' => 'Votre Panier'])

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
            <div class="col-lg-6 ">
                <span class="text-primary">CRÉEZ VOTRE COMPTE</span>
                <p class="mt-3">Saisissez votre adresse mail pour créer votre compte : </p>
                <form action="" method="post">
                    <div class="form-inline">
                        <input type="email" class="form-control mb-5" name="mail" placeholder="email">
                    </div>
                    <div>
                        <button type="submit" name="submitCreationCompte" class="btn btn-primary">CRÉEZ VOTRE COMPTE
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <span class="text-primary">DÉJÀ INSCRIT?</span>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="mail" class="mr-3 mt-3">Votre adresse mail</label>
                        <input type="email" class="form-control" name="mail" placeholder="email">
                        <label for="mail" class="mr-3 mt-3">Votre mot de passe</label>
                        <input type="password" class="form-control mb-2" name="motdepasse" placeholder="xxxxxxx">
                        <a href="">Mot de passe oublié?</a>
                    </div>
                    <div>
                        <button type="submit" name="submitIdentification" class="btn btn-primary mt-4">IDENTIFICATION
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col d-flex justify-content-start ">
                <a href="{{route('panier.recapitulatif')}}" class="btn btn-outline-primary" role="button" aria-pressed="true">PRECEDENT</a>
            </div>
        </div>
    </main>

@endsection