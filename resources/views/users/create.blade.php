<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cadastrar Usuário</h1>

    @if(session('success'))
    <p style="color:green">
        {{session('success')}}
    </p>
    @endif
    @if(session('error'))
    <p style="color:red">
        {{session('error')}}
    </p>
    @endif

    <form action="{{ route('user.store') }}" method="post">
        @csrf

        <label for="name">Nome: </label>
        <input type="text" name="name" id="name" placeholder="Nome completo" value="{{ old('name') }}" required><br><br>

        <label for="email">E-mail: </label>
        <input type="email" name="email" id="email" placeholder="E-mail do usuário" value="{{ old('email') }}" required><br><br>

        <label for="password">Senha: </label>
        <input type="password" name="password" id="password" placeholder="Digite sua senha" value="{{ old('password') }}" required><br><br>

        <button type="submit">Cadastrar</button>

    </form>
</body>

</html>