@extends ('layout.app')

@section('title')
    Recrutement
@endsection



@section('content')
    <h1 class="text-secondary text-center">RECRUTEMENT</h1>
    <h2 class="text-center">Bienvenue sur le site d'emploi DigiDog</h2>
    <div class="container">
        <div class="col-md-12 mb-3 text-center ">
            <img class=" pt-4" src='{{ asset('images/recrutement.jpg') }}' width="500" height="350"
                 alt="Photo de chiens"/>
        </div>
        <div class="container">
            <div class="row mb-5 ">
                <div class="col-md-4 mt-4 bg-success text-center align-self-center">
                    <p>
                        <b>FINANCE - AUDIT</b> <br>
                        STAGE – ASSISTANT CONTRÔLE INTERNE F/H
                        Contrat Stage
                        Nombre d'heures 35 <br>
                        Statut Stagiaire

                    </p>
                </div>
                <div class="col-md-4 mt-4 text-center align-self-center">
                    <p>
                        <b>FINANCE - CONTRÔLE DE GESTION </b>
                        ALTERNANCE- ASSISTANT CONTRÔLEUR DE GESTION F/H <br>
                        Contrat Alternance
                        Nombre d'heures 35 <br>
                        Statut Employé
                    </p>
                </div>
                <div class="col-md-4 mt-4 bg-success text-center align-self-center">
                    <p>
                        <b> MARKETING - E-COMMERCE </b> <br>
                        STAGE ASSISTANT(E) E-COMMERCE F/H <br>
                        Contrat Stage
                        Nombre d'heures 35 <br>
                        Statut Stagiaire
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mb-5 ">
                <div class="col-md-4 mt-4 text-center align-self-center">
                    <p>
                        <b>COMMERCE VENTE - VENTE - CONSEIL</b>
                        VENDEUR PRODUITS EDITORIAUX (F/H)
                        Contrat CDI
                        Nombre d'heures 35<br>
                        Statut Employé</p>
                </div>
                <div class="col-md-4 mt-4 bg-success text-center align-self-center">
                    <p>
                        <b> SAV -LOGISTIQUE</b><br>
                        -SUPPLY CHAIN - LIVRAISON <br>
                        Contrat CDD <br>
                        Statut Employé</p>
                </div>
                <div class="col-md-4 mt-4 text-center align-self-center">
                    <p><b>SAV -LOGISTIQUE -SUPPLY CHAIN</b>
                        TECHNICIEN SAV DOMICILE F/H <br>
                        Contrat CDI
                        Nombre d'heures 35 <br>
                        Statut Employé
                    </p>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mb-5 ">
                <div class="col-md-4 mt-4 bg-success text-center align-self-center">
                    <p><b>COMMERCE VENTE</b> <br>
                        VENTE - CONSEIL
                        VENDEUR F/H <br>
                        Nombre d'heures 35 <br>
                        Statut Employé <br>
                    </p>

                </div>
                <div class="col-md-4 mt-4 text-center  align-self-center border-secondary ">
                    <p><b>SECURITE MAINTENANCE</b> <br>
                        RESPONSABLE MAINTENANCE-SECURITE<br>
                        Contrat CDI <br>
                        Nombre d'heures 35 <br>
                        Statut Cadre
                    </p>
                </div>
                <div class="col-md-4 mt-4 bg-success text-center align-self-center">
                    <p>
                        <b>COMMERCE VENTE</b> <br>
                        VENTE - CONSEIL
                        STAGE VENTE H/F
                        Contrat stage<br>
                        Statut Stagiaire</p>


                </div>
            </div>
        </div>
    </div>

@endsection