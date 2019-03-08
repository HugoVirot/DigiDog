@extends ('layout.app')

@section('title')
    Mes adresses - DigiDog
@endsection

@section('content')
    <article id="photo" class="container-fluid">
        <div class="row justify-content-center">
            <img class="img-responsive" id="chiots" src="{{ asset("images/moncompte.jpeg") }}">
        </div>
    </article>
    <article id="formulaire" class="container justify-content-center text-center mb-3">
        <form id="formulaire" method="post">
            <div class="form-group">
                <legend class="nomchamp">Adresse de livraison</legend>
                <fieldset class="col-6">
                    <div class="row justify-content-center">

                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="label" for="lastname">Nom</label>
                        </div>
                        <div class="col-6">
                            <input id="adresse" name="lastname" type=text required placeholder="Dupont">
                        </div>
                        <div class="col-6">
                            <label class="label" for="firstname">Prénom</label>
                        </div>
                        <div class="col-6">
                            <input id="adresse" name="firstname" type=text required placeholder="Jean">
                        </div>
                        <div class="col-6">
                            <label class="label" for="adresse">Adresse</label>
                        </div>
                        <div class="col-6">
                            <input id="adresse" name="adresse" type=text required placeholder=" 99, rue du teckel">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="label" for=codepostal>C.P.</label>
                        </div>
                        <div class="col-6">
                            <input id=codepostal name=codepostal type=text required placeholder=" 99999">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="label" for=ville>Ville</label>
                        </div>
                        <div class="col-6">
                            <input id=ville name=ville type=text required placeholder=" Chienville">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="label" for=pays>Pays</label>
                        </div>
                        <div class="col-6">
                            <input id=pays name=pays type=text required placeholder=" France">
                        </div>
                    </div>
                </fieldset>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </article>
@endsection