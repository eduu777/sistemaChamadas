@extends('layouts.admin')

@section('conteudo')

<div class="container mt-5">
    <h2>Criar Usuário</h2>
    <form action="{{route('user.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Login:</label>
            <input type="text" class="form-control" id="email" name="login" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="senha" class="form-label">Acesso:</label>
                <select class="form-select mb-3" aria-label="Default select example" name="acesso">
                    <option selected>Selecione o acesso</option>
                    <option value="admin">Admin</option>
                    <option value="recepcao">Recepção</option>
                    <option value="profissional">Profissional</option>
                </select>
            </div>
            <div class="col-6">
                <label for="local" class="form-label">Local:</label>
                <select class="form-select mb-3" aria-label="Default select example" name="local">
                    <option selected>Selecione o acesso</option>
                    <option value="1">Sala 1</option>
                    <option value="2">Sala 2</option>
                    <option value="3">Sala 3</option>
                    <option value="Doutor Manassés">Dr Manassés</option>
                    <option value="Recepção">Recepção</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Criar Usuário</button>
    </form>
</div>

@endsection