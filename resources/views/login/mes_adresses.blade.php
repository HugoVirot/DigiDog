@extends ('layout.app')

@section('title')
    Mes adresses - DigiDog
@endsection

@section('content')
    <main>
        <article id="photo" class="container-fluid mb-3">
            <div class="row justify-content-center">
                <img class="img-responsive" id="chienniche" src="{{ asset("images/chienniche.jpg") }}">
            </div>
        </article>

        <div class="row">
            <div class="col-xs-12 col-md-6">
                <article id="formulaire" class="container mw-100 text-center">
                    <form id="formulaire2" method="post" action="{{route('login.mes_adresses')}}">
                        @csrf
                        <div class="form-group justify-content-around">
                            <fieldset class="container">
                                <h2 class="nomchamp">Adresse de facturation</h2>
                                <div class="row justify-content-center">
                                    <div class="row">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <div class="col-6">
                                            <label class="label" for="wording">Libellé</label>
                                        </div>

                                        <div class="col-6">
                                            <input id="adresse" name="wording" type=text required placeholder="Travail"
                                                   value="{{$addresses->wording}}">
                                        </div>
                                        <div class="col-6">
                                            <label class="label" for="lastname">Nom</label>
                                        </div>
                                        <div class="col-6">
                                            <input id="adresse" name="last_name" type=text required placeholder="Dupont"
                                                   value="{{$addresses->last_name}}">
                                        </div>
                                        <div class="col-6">
                                            <label class="label" for="firstname">Prénom</label>
                                        </div>
                                        <div class="col-6">
                                            <input id="adresse" name="first_name" type=text required placeholder="Jean"
                                                   value="{{$addresses->first_name}}">
                                        </div>
                                        <div class="col-6">
                                            <label class="label" for="adresse">Adresse</label>
                                        </div>
                                        <div class="col-6">
                                            <input id="adresse" name="street" type=text required
                                                   placeholder="55, rue du pitbull" value="{{$addresses->street}}">
                                        </div>
                                        <div class="col-6">
                                            <label class="label" for="adresse">Complément d'adresse</label>
                                        </div>
                                        <div class="col-6">
                                            <input id="adresse" name="additionnal_address" type=text
                                                   placeholder="entreprise Chienchien"
                                                   value="{{$addresses->additionnal_address}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="label" for=codepostal>C.P.</label>
                                        </div>
                                        <div class="col-6">
                                            <input id=codepostal name="postal_code" type="text" placeholder="77777"
                                                   value="{{$addresses->postal_code}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="label" for=ville>Ville</label>
                                        </div>
                                        <div class="col-6">
                                            <input id="ville" name="city" type="text" required placeholder="Dog City"
                                                   value="{{$addresses->city}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="label" for=pays>Pays</label>
                                        </div>
                                        <div class="col-6">
                                            <input id="pays" name="country" type="text" required placeholder="France"
                                                   value="{{$addresses->country}}">
                                        </div>
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

                    <div class="form-group justify-content-around">
                        <fieldset class="container">
                            <h2 class="nomchamp">Adresse de livraison</h2>
                            <div class="row justify-content-center">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="label" for="wording">Libellé</label>
                                    </div>
                                    <div class="col-6">
                                        <input id="adresse" name="wording" type=text required placeholder="Travail"
                                               value="{{old('lname')}}">
                                    </div>
                                    <div class="col-6">
                                        <label class="label" for="lastname">Nom</label>
                                    </div>
                                    <div class="col-6">
                                        <input id="adresse" name="lastname" type=text required placeholder="Dupont"
                                               value="{{old('lname')}}">
                                    </div>
                                    <div class="col-6">
                                        <label class="label" for="firstname">Prénom</label>
                                    </div>
                                    <div class="col-6">
                                        <input id="adresse" name="firstname" type=text required placeholder="Jean"
                                               value="{{old('lname')}}">
                                    </div>
                                    <div class="col-6">
                                        <label class="label" for="adresse">Adresse</label>
                                    </div>
                                    <div class="col-6">
                                        <input id="adresse" name="adresse" type=text required
                                               placeholder="55, rue du pitbull" value="{{old('lname')}}">
                                    </div>
                                    <div class="col-6">
                                        <label class="label" for="adresse">Complément d'adresse</label>
                                    </div>
                                    <div class="col-6">
                                        <input id="adresse" name="adresse" type=text
                                               placeholder="entreprise Chienchien" value="{{old('lname')}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="label" for=codepostal>C.P.</label>
                                    </div>
                                    <div class="col-6">
                                        <input id=codepostal name=codepostal type=text required placeholder="77777"
                                               value="{{old('lname')}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="label" for=ville>Ville</label>
                                    </div>
                                    <div class="col-6">
                                        <input id=ville name=ville type=text required placeholder="Dog City"
                                               value="{{old('lname')}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="label" for=pays>Pays</label>
                                    </div>
                                    <div class="col-6">
                                        <input id=pays name=pays type=text required placeholder=" France"
                                               value="{{old('lname')}}">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Modifier</button>
                        </fieldset>
                    </div>

                </article>
            </div>
        </div>
    </main>
@endsection