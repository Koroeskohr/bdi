<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>BDI</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        @include('header')
        @yield('content')
    </div>
    @include('errors/_any')
    @yield('footer')
</body>
</html>