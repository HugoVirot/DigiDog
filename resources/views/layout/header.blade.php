<header class="mb-5 bg-success">

    <div class="container-fluid">

        <div class="row  justify-content-between align-items-end ">
            <div class="col-auto">
                <a href="/"><img src="{{ asset("images/logo-horizontal.png") }}" class="logo-header img-fluid"></a>
            </div>

            <div class="col-auto mr-5">
                <nav class="navbar navbar-light bg-primary navbar-expand-lg rounded-pill justify-content-center mb-4 menu">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarTogglerDemo01"
                            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
                        <a class="nav-link" href="/">Accueil</a>
                        <a class="nav-link" href="/catalogue">Catalogue</a>
                        <a class="nav-link" href="/panier">Panier</a>
                        <a class="nav-link" href="/connexion">Connexion</a>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Mon compte
                            </a>
                            <div class="dropdown-menu bg-primary" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/mon_compte">Mon compte</a>
                                <a class="dropdown-item" href="/mes_adresses">Mes adresses</a>
                                <a class="dropdown-item" href="/mes_commandes">Mes commandes</a>
                            </div>
                        </div>
                        <a class="nav-link" href="/a_propos">A propos</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
