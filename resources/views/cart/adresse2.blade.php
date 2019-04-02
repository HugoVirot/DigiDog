@extends('layouts.app', ['title' => 'Votre Panier'])

@section('content')
    <main class="container border mt-5 mb-5">
        <nav class="breadcrumb mt-2">
            <a class="breadcrumb-item text-dark">RECAPITULATIF DE COMMANDE</a>
            <a class="breadcrumb-item text-dark">IDENTIFICATION</a>
            <span class="breadcrumb-item active text-primary">ADRESSE</span>
            <a class="breadcrumb-item text-dark">FRAIS DE PORT</a>
            <a class="breadcrumb-item text-dark">PAIEMENT</a>
        </nav>
        <div class="row bg-secondary text-white justify-content-start py-2">
            <div class="col-sm-12 ">
                <h1 class="h5 my-auto">VOS ADRESSES</h1>
            </div>
        </div>
        <form>
            <div class="row pt-5">
                <label class="col-sm-3 col-form-label" for="libelleAdresse">Choisissez une adresse de livraison</label>

                <div class="col-sm-3">
                    <select class="custom-select" name="libelleAdresse">
                        <option value=""></option>
                    </select>
                </div>
            </div>
            <div class="form-check form-check-inline mt-3">
                <input class="mr-2" type="checkbox" name="" value="">
                <label class="form-check-label" for="">Utiliser la même adresse pour la facturation</label>
            </div>
        </form>
        <div class="row my-5">
            <div class="col-lg-6">
                <div class="border border-primary p-2">
                    <span class="text-primary">VOTRE ADRESSE DE LIVRAISON</span>
                    <p>Prenom Nom<br>
                        adresse<br>
                        code postal Ville<br>
                        pays</p>
                    <a href="">Mettre à jour</a>
                </div>
            </div>

            <div class=" col-lg-6 ">
                <div class="border border-primary p-2">
                    <span class="text-primary">VOTRE ADRESSE DE FACTURATION</span>
                    <p>Prenom Nom<br>
                        adresse<br>
                        code postal Ville<br>
                        pays</p>
                    <a href="">Mettre à jour</a>
                </div>
            </div>
        </div>
        <div>
            <button type="submit" name="submitNouvelleAdresse" class="btn btn-primary">AJOUTEZ UNE NOUVELLE ADRESSE
            </button>
        </div>

        <div class="row pt-5">
            <div class="col d-flex justify-content-start ">
                <a href="{{route('panier.identification')}}" class="btn btn-outline-primary" role="button" aria-pressed="true">PRECEDENT</a>
            </div>
        </div>
    </main>

@endsection