@extends('layouts.app', ['title' => 'Votre Panier'])

@section('content')
    <div class="container mt-5">
        <div class="row bg-primary text-white justify-content-start py-2">
            <div class="col-sm-12 ">
                <h1 class="h5 my-auto">VOS ADRESSES</h1>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger toaster-info">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <p class="mt-4">Pour ajouter une nouvelle adresse, complétez le formulaire: <br>
            * Champs requis </p>
        <div class="row my-5">
            <div class="col-sm-12 ">
                <form action="{{route('addresses.store')}}" method="post">
                    @csrf
                    <div class="py-3 border border-primary">
                        <p class="pl-5 text-primary">VOTRE ADRESSE</p>
                        <div class="form-group row justify-content-center mt-3">
                            <label for="nom" class="col-sm-2 col-form-label">Nom<span class="ChampsRequis">*</span></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="nom" required value="{{old('nom')}}">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center mt-3">
                            <label for="prenom" class="col-sm-2 col-form-label">Prénom<span class="ChampsRequis">*</span></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="prenom" required value="{{old('prenom')}}">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center mt-3">
                            <label for="adresse" class="col-sm-2 col-form-label">Adresse<span class="ChampsRequis">*</span></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="adresse" required value="{{old('adresse')}}">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center mt-3">
                            <label for="complementAdresse" class="col-sm-2 col-form-label">Complément adresse</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="complementAdresse" value="{{old('complementAdresse')}}">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center mt-3">
                            <label for="codePostal" class="col-sm-2 col-form-label">Code postal<span class="ChampsRequis">*</span></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="codePostal" required value="{{old('codePostal')}}">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center mt-3">
                            <label for="ville" class="col-sm-2 col-form-label">Ville<span class="ChampsRequis">*</span></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="ville" required value="{{old('ville')}}">
                            </div>
                        </div>
                        <div class="form-group row  justify-content-center mt-3">
                            <label for="pays" class="col-sm-2 col-form-label">Pays<span class="ChampsRequis">*</span></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="pays" required value="{{old('pays')}}">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center mt-3">
                            <label for="libelleAdresse" class="col-sm-2 col-form-label">Libellé de cette adresse</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="libelleAdresse" required value="{{old('libelleAdresse')}}">
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