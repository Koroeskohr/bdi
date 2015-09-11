<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>BDI</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    {!! Html::style(asset('css/app.css')) !!}

</head>
<body>
    @include('header')
    <div class="container">
        @yield('content')
    </div>
    @include('errors/_any')
    @yield('footer')
    @include('scripts')
</body>
</html>