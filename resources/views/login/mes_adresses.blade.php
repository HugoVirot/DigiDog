@extends ('layout.app')

@section('title')
    Mes adresses - DigiDog
@endsection

@section('content')
    <article id="photo" class="container-fluid mb-3">
        <div class="row justify-content-center">
            <img class="img-responsive" id="chienniche" src="{{ asset("images/chienniche.jpg") }}">
        </div>
    </article>

    <div class="row">
        <div class="col-xs-12 col-md-6">
    <article id="formulaire" class="container mw-100 text-center">
        <form id="formulaire1" method="post">
            <div class="form-group">
                <fieldset class="container">
                    <h2 class="nomchamp">Adresse de livraison</h2>
                    <div class="row justify-content-center">
                        <div class="row">
                            <div class="col-6">
                                <label class="label" for="wording">Libellé</label>
                            </div>
                            <div class="col-6">
                                <input id="adresse" name="wording" type=text required placeholder="maison">
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
                                    <input id="adresse" name="adresse" type=text required
                                           placeholder=" 99, rue du teckel">
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="label" for="adresse">Complément d'adresse</label>
                            </div>
                            <div class="col-6">
                                <input id="adresse" name="adresse" type=text placeholder="Résidence Toutou Bât. D">
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
                        <button type="submit" class="btn btn-primary mt-2">Modifier</button>
                </fieldset>
            </div>

        </form>
    </article>
        </div>
        <div class="col-xs-12 col-md-6">
    <article id="formulaire" class="container mw-100 text-center">
        <form id="formulaire2" method="post">
            <div class="form-group justify-content-around">
                <fieldset class="container">
                    <h2 class="nomchamp">Adresse de facturation</h2>
                    <div class="row justify-content-center">
                    <div class="row">
                        <div class="col-6">
                            <label class="label" for="wording">Libellé</label>
                        </div>
                        <div class="col-6">
                            <input id="adresse" name="wording" type=text required placeholder="Travail">
                        </div>
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
                            <input id="adresse" name="adresse" type=text required placeholder="55, rue du pitbull">
                        </div>
                        <div class="col-6">
                            <label class="label" for="adresse">Complément d'adresse</label>
                        </div>
                        <div class="col-6">
                            <input id="adresse" name="adresse" type=text placeholder="entreprise Chienchien">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="label" for=codepostal>C.P.</label>
                        </div>
                        <div class="col-6">
                            <input id=codepostal name=codepostal type=text required placeholder="77777">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="label" for=ville>Ville</label>
                        </div>
                        <div class="col-6">
                            <input id=ville name=ville type=text required placeholder="Dog City">
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
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Modifier</button>
                </fieldset>
            </div>
        </form>
    </article>
        </div>
    </div>

@endsection