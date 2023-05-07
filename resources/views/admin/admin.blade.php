<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.bootstrap5.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
    <title>@yield('title') | Administration</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Agence</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @php
            $route = request()->route()->getName();
        @endphp
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a @class(['nav-link', 'active' => str_contains($route, 'property.')]) aria-current="page"
                    href="{{route('admin.property.index')}}">Gérer les biens</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.option.index')}}" @class(['nav-link', 'active' => str_contains($route,
                    'option.')]) href="#">Gérer les options</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
<div class="container mt-5">

    @include('shared.flash')

    @yield('content')
</div>
<script>
    new TomSelect('select[multiple]', {plugins: {remove_button: {title: 'Supprimer'}}})
</script>
</body>
</html>
