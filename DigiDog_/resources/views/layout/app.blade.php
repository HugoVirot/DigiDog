<html>
<head>
    <title>App Name - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('layout.header')

    <div class="container">
        @yield('content')
    </div>

    @include('layout.footer')
</body>
</html>