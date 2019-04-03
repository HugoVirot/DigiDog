@extends ('layout.backoffice')

@section('title')
    --Admin--
@endsection



@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="wrapper-logo-admin d-flex flex-sm-column flex-lg-row justify-content-center align-items-center">
                    <img src="{{asset('images/logo_sans_texte.png')}}" class="w-25 mt-1" alt="Global notes Logo">
                    <h1 class="ml-5 h1-color"> Administration </h1>
                    <h1 class="ml-5 h1-color">DigiDog</h1>
                </div>
                <hr>

            </div>
        </div>
        <div class="row mt-0 ">
            <div class="col-12 text-center mb-3 border-2 rounded">

                <i class="fas fa-database w-100 big-icon text-light"></i>

            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="card mb-3 card-admin" >
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <i class="fas fa-folder big-icon"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Produits : <strong></strong></h5>
                                <p class="card-text">Produits crées dans la base de données.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card mb-3 card-admin" >
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <i class="fas fa-archive big-icon"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Catégories : <strong></strong></h5>
                                <p class="card-text">Catégories presentes dans la base de données. </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card mb-3 card-admin" >
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <i class="far far fa-sticky-note big-icon"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">autre : <strong></strong></h5>
                                <p class="card-text">autre enregistrés dans la base de données.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card mb-3 card-admin" >
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <i class="far fa-address-book big-icon"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Users : <strong>5</strong></h5>
                                <p class="card-text">Utilisateurs presents dans la base de données.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card mb-3 card-admin">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <i class="fas fa-fingerprint big-icon"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Rules : <strong>4</strong></h5>
                                <p class="card-text">Droits presents dans la base de données.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row mt-1 mb-5">
            <div class="col-12 text-center mb-3 border-2 rounded">
                <i class="fas fa-database w-100 big-icon text-light"></i>
            </div>
        </div>
    </div>
    <hr>

@endsection
