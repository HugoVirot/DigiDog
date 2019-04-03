<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://fonts.googleapis.com/css?family=Chelsea+Market" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="/js/app.js"></script>
    <link rel="icon" href="{{ asset("images/logo_sans_texte.png") }}">
</head>
<body class="d-flex flex-column h-100">

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">


                <li class="nav-item pl-5">
                    <a class="nav-link" href="{{ route('admin.index') }}">
                        <img class="logo-nav" src="{{asset('images/logo_sans_texte.png')}}">
                    </a>
                </li>

                <li class="nav-item pl-5">
                    <a class="nav-link "
                       href="{{ route('admin.products.index') }}"><i class="fas fa-dog "></i> </a>
                </li>
                <li class="nav-item pl-5">
                    <a class="nav-link "
                       href="{{ route('admin.categories.index') }}"><i class="fas fa-paw"></i></a>
                </li>
                <li class="nav-item pl-5">
                    <a class="nav-link "
                       href="{{ route('admin.categories.index') }}"><i class="fas fa-sign-out-alt"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<main class="container-fluid p-0 m-0">
    <img class="bg-admin" src="{{asset('images/logo_sans_texte.png')}}">
    @yield('content')

</main>

</body>
</html>
