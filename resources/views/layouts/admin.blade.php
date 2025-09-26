<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources\css\app.css','resources\js\app.js'])

    <title>Projeto</title>
</head>

<body>
    <header class="header">
        <div class="content-header">
            <h2 class="tittle-logo"><a href="{{ route('dashboard')}}">PM</a></h2>

            <ul class="list-nav-link">
                <li><a href="{{ route('user.index') }}" class="nav-link">Usuários</a></li>
                <li><a href="{{ route('dashboard')}}" class="nav-link">Sair</a></li>
            </ul>

        </div>
    </header>
    @yield('content')
</body>

</html>