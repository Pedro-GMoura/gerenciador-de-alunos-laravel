@extends('layouts.admin')

@section('content')

<div class=".main-container">


    <div class="content">
        <div class="content-title">
            <h1 class="page-title">Editar Senha</h1>
            <a href="{{ route('user.index') }}" class="btn-info">Listar</a>
        </div>

        <x-alert/>

        <form action="{{ route('user.updatePassword',['user'=>$users->id]) }}" method="post" class="form-container">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="form-label">Nova senha: </label>
                <input type="password" name="password" id="password" placeholder="Digite sua nova senha" class="form-input">
            </div>

            <button type="submit" class="btn-warning">Salvar</button>

        </form>
    </div>
</div>

@endsection