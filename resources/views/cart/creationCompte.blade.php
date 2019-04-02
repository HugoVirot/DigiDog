@extends('layouts.app', ['title' => 'Votre Panier'])


@section('header')

@section('content')

    <div class="container">
        <div class="row">
            {{--            HEADER INFORMATION PERSONNELLES                     --}}

            <div class="col-sm-12 header-tonique bg-primary d-flex justify-content-start mt-5">
                <h1 class="h5 p-1 mt-1"><span class="ml-2"><strong> VOS INFORMATIONS PERSONNELLES</strong></span>
                </h1>
            </div>

        </div>
        <form>
            <div class="row d-flex flex-row w-100 p-5 mt-1 ">


                <div class="col infoBox mb-0 p-5">

                    <div class="wrapper d-flex  justify-content-end align-items-center p-2 m-2">
                        <span class="requiredField">*</span>
                        <span class="mr-5 inputSpan">Prénom</span>
                        <input type="text" class="form-control inputSize" name="prenom" id="prenom" placeholder=""
                               required>
                    </div>

                    <div class="wrapper d-flex flex-row justify-content-center align-items-center  p-2 m-2">
                        <span class="requiredField">*</span><span class="mr-5 inputSpan">nom</span>
                        <input type="text" class="form-control" name="nom" id="nom" placeholder="" required>
                    </div>

                    <div class="wrapper d-flex flex-row justify-content-center align-items-center  p-2 m-2">
                        <span class="requiredField">*</span><span class="mr-5 inputSpan">Email</span>
                        <input type="email" class="form-control" name="email" id="email" placeholder="" required>

                    </div>

                    <div class="wrapper d-flex flex-row justify-content-center align-items-center  p-2 m-2">
                        <span class="requiredField">*</span><span class="mr-5 inputSpan">Votre mot de passe</span>
                        <input type="password" class="form-control" name="password" id="password" placeholder=""
                               required>
                    </div>

                    <div class="wrapper-submit w-100">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="CheckNewLetter" id="CheckNewLetter">
                            <label class="form-check-label" for="exampleCheck1">S'incrire à la newsLetter</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="CheckOffrePartenaire"
                                   id="CheckOffrePartenaire">
                            <label class="form-check-label" for="exampleCheck1">Recevez les offres spéciales de nos
                                partenaires</label>
                        </div>
                    </div>

                </div>

            </div>
            <div class="row p-1 mb-3">
                <div class="col d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </div>

            </div>
        </form>

    </div>
    </div>
@endsection

