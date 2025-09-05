@extends('layouts.admin')

@section('content')

<div class=".main-container">


    <div class="content">
        <div class="content-title">
            <h1 class="page-title">Cadastrar Usuário</h1>
            <a href="{{ route('user.index') }}" class="btn-info">Listar</a>
        </div>

        <x-alert/>

        <form action="{{ route('user.store') }}" method="post" class="form-container">
            @csrf

            <div class="mb-4">
                <label for="name" class="form-label">Nome: </label>
                <input type="text" name="name" id="name" placeholder="Nome completo" value="{{ old('name') }}" class="form-input">
            </div>

            <div class="mb-4">
                <label for="email" class="form-label">E-mail: </label>
                <input type="email" name="email" id="email" placeholder="E-mail do usuário" value="{{ old('email') }}"  class="form-input">
            </div>

            <div class="mb-4">
                <label for="password" class="form-label">Senha: </label>
                <input type="password" name="password" id="password" placeholder="Digite sua senha" value="{{ old('password') }}"  class="form-input">
            </div>

            <button type="submit" class="btn-success">Cadastrar</button>

        </form>
    </div>
</div>

@endsection