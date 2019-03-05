<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="/js/app.js"></script>
    <link rel="icon" href="{{ asset("images/logo_sans_texte.png") }}">
</head>
<body class="d-flex flex-column h-100">
    @include('layout.header')


        @yield('content')


    @include('layout.footer')
</body>
</html>