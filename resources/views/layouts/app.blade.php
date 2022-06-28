<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">КупиДевайс</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            @guest
            <li class="nav-item">
            <a href="/login"><button class="btn btn-outline-light mr-2">Авторизация</button></a>
            </li>

            <li class="nav-item">
            <a href="/register"><button class="btn btn-outline-light ml-2">Регистрация</button></a>
            </li>
            @endguest

            @auth
            @if(auth()->user()->role === "ADMIN")
            <li class="nav-item admin">
            <a href="/admin"><button class="btn btn-outline-light">Админ панель</button></a>
            </li>
            @elseif((auth()->user()->role === "USER"))
            <li class="nav-item admin">
            <a href="/basket"><button class="btn btn-outline-light">Корзина</button></a>
            </li>
            @endif

            <li class="nav-item">
            <a href="/logout"><button class="btn btn-outline-light">Выйти</button></a>
            </li>
            @endauth
        </ul>
        </div>
    </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
