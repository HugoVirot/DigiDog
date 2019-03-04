<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
    @include('layout.header')

    <div class="container">
        @yield('content')
    </div>

    @include('layout.footer')
</body>
</html>