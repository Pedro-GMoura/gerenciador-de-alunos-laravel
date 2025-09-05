@extends('layouts.admin')

@section('content')

<div class=".main-container">


    <div class="content">
        <div class="content-title">
            <h1 class="page-title">Editar Usuário</h1>
            <a href="{{ route('user.index') }}" class="btn-info">Listar</a>
        </div>

        <x-alert/>

        <form action="{{ route('user.update',['user'=>$users->id]) }}" method="post" class="form-container">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="form-label">Nome: </label>
                <input type="text" name="name" id="name" placeholder="Nome completo" value="{{ old('name', $users->name) }}" class="form-input">
            </div>

            <div class="mb-4">
                <label for="email" class="form-label">E-mail: </label>
                <input type="email" name="email" id="email" placeholder="E-mail do usuário" value="{{ old('email', $users->email) }}"  class="form-input">
            </div>

            <button type="submit" class="btn-warning">Salvar</button>

        </form>
    </div>
</div>

@endsection