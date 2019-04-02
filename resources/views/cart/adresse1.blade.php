@extends('layouts.app', ['title' => 'Votre Panier'])

@section('content')
    <div class="container mt-5">
        <div class="row bg-primary text-white justify-content-start py-2">
            <div class="col-sm-12 ">
                <h1 class="h5 my-auto">VOS ADRESSES</h1>
            </div>
        </div>
        <p class="mt-4">Pour ajouter une nouvelle adresse, complétez le formulaire: <br>
            * Champs requis </p>
        <div class="row my-5">
            <div class="col-sm-12 ">
                <form action="" method="post">
                    <div class="py-3 border border-primary">
                        <p class="pl-5 text-primary">VOTRE ADRESSE</p>
                        <div class="form-group row justify-content-center mt-3">
                            <label for="nom" class="col-sm-2 col-form-label">Nom<span class="ChampsRequis">*</span></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="nom" required>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center mt-3">
                            <label for="prenom" class="col-sm-2 col-form-label">Prénom<span class="ChampsRequis">*</span></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="prenom" required>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center mt-3">
                            <label for="societe" class="col-sm-2 col-form-label">Societe</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="societe" required>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center mt-3">
                            <label for="adresse" class="col-sm-2 col-form-label">Adresse<span class="ChampsRequis">*</span></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="adresse" required>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center mt-3">
                            <label for="complementAdresse" class="col-sm-2 col-form-label">Complément adresse</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="complementAdresse">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center mt-3">
                            <label for="codePostal" class="col-sm-2 col-form-label">Code postal<span class="ChampsRequis">*</span></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="codePostal" required>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center mt-3">
                            <label for="ville" class="col-sm-2 col-form-label">Ville<span class="ChampsRequis">*</span></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="ville" required>
                            </div>
                        </div>
                        <div class="form-group row  justify-content-center mt-3">
                            <label for="pays" class="col-sm-2 col-form-label">Pays<span class="ChampsRequis">*</span></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="pays" required>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center mt-3">
                            <label for="libelleAdresse" class="col-sm-2 col-form-label">Libellé de cette adresse</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="libelleAdresse" required>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center mt-3">
                            <label for="TelephoneDomicile" class="col-sm-2 col-form-label">Téléphone domicile</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="TelephoneDomicile">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center mt-3">
                            <label for="TelephonePortable" class="col-sm-2 col-form-label">Téléphone portable<span class="ChampsRequis">*</span></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="TelephonePortable" required>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" name="submitCreationCompte" class="btn btn-primary mt-5">VALIDER
                        </button>
                    </div>
                </form>
            </div>
        </div>




@endsection