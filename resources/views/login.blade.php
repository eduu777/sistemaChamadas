@extends('layouts.login')

@section('conteudo')
   
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 my-5">
        <h1 class="text-center py-5">Chamada Fácil</h1>   
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Login</h3>
          </div>
          @error('error')
              <span class="text-danger text-center">{{ $message }}</span>
          @enderror
          <div class="card-body">
  
            <!-- Formulário de Login -->
            <form action="{{route('login.store')}}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="username" class="form-label">Nome de Usuário:</label>
                <input type="text" class="form-control" id="username" name="login" required>
              </div>
  
              <div class="mb-3">
                <label for="password" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
  
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Entrar</button>
              </div>
            </form>
  
          </div>
        </div>
      </div>
    </div>
  </div>    

@endsection