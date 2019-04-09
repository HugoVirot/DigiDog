<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="/js/app.js"></script>
    <link rel="icon" href="{{ asset("images/logo_sans_texte.png") }}">
</head>
<body class="d-flex flex-column h-100">
<header class="mb-5 bg-success">

    <div class="container-fluid">

        <div class="row  justify-content-between align-items-end ">
            <div class="col-auto">
                <a href="/"><img src="{{ asset("images/logo-horizontal.png") }}" class="logo-header img-fluid"></a>
            </div>

            <div class="col-auto mr-5">
                @if(session('Error'))
                <div class="alert alert-danger">
                   {{session('Error')}}
                </div>
                @endif
                <nav class="navbar navbar-light bg-primary navbar-expand-lg rounded-pill justify-content-center mb-4 menu">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarTogglerDemo01"
                            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
                        <a class="nav-link" href="/">Accueil</a>
                        <a class="nav-link" href="/products">Catalogue</a>
                        <a class="nav-link" href="/panier">Panier</a>
                        <a class="nav-link" href="/connexion">Connexion</a>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Mon compte
                            </a>
                            <div class="dropdown-menu bg-primary" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/mon_compte">Mon compte</a>
                                <a class="dropdown-item" href="{{route('login.mes_adresses')}}">Mes adresses</a>
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


@yield('content')


<footer class="footer bg-success py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 text-center align-self-center">
                <ul>
                    <li>
                        <a href="/recrutement" target="_blank">Recrutement</a>
                    </li>
                    <li>
                        <a href="/faq" target="_blank">FAQ</a>
                    </li>
                    <li>
                        <a href="/contact" target="_blank">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 text-center align-self-center">
                <ul>
                    <li>
                        <a href="/mentions_legales" target="_blank">Mentions légales</a>
                    </li>
                    <li>
                        <a href="/a_propos" target="_blank">A propos</a>
                    </li>
                    <li>
                        <a href="/sav" target="_blank">SAV</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 text-center align-self-center">
                <p><img src="{{ asset("images/logo_sans_texte.png") }}" class="logo-footer icon"/>DIGIDOG <br>
                    21 rue du caniche<br>
                    37000 TOURS<br>
                    téléphone 0623072030<br>
                    contact@digidog.fr</p>
            </div>

            <div class="col-md-3 text-center align-self-center">
                <div>
                    <div>Suivez nous sur les réseaux sociaux</div>
                    <a target="_blank" href="http://pinterest.com">
                        <img src="{{ asset("images/pinterest.png") }}" class="icon">
                    </a>

                    <a target="_blank" href="http://instagram.com">
                        <img src="{{ asset("images/instagram.png") }}" class="icon">
                    </a>

                    <a target="_blank" href="http://facebook.com">
                        <img src="{{ asset("images/facebook.png") }}" class="icon">
                    </a>

                    <a target="_blank" href="http://twitter.com">
                        <img src="{{ asset("images/twitter.png") }}" class="icon">
                    </a>
                    <a target="_blank" href="http://youtube.com">
                        <img src="{{ asset("images/youtube.png") }}" class="icon">
                    </a>
                </div>
                <div class="mt-2">
                    <div>Paiement sécurisé</div>
                    <img src="{{ asset("images/cards.png") }}" class="icon"/>
                    <img src="{{ asset("images/paypal.png") }}" class="icon"/>
                    <img src="{{ asset("images/bitcoin.png") }}" class="icon"/>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>