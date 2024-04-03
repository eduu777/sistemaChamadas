@extends('layouts.admin')

@section('conteudo')
<h1 class="text-center">Lista de usuários</h1>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#criarModal">
  <i class="bi bi-plus"></i>
</button>
<table class="table table-bordered">
       <thead>
         <tr>
           <th scope="col">Id</th>
           <th scope="col">Nome</th>
           <th scope="col">Login</th>
           <th scope="col">Acesso</th>
           <th scope="col">Local</th>
           <th scope="col">Editar</th>
           <th scope="col">Alt Senha</th>
           <th scope="col">Excluir</th>
         </tr>
       </thead>
       <tbody>
         @foreach ($usuarios as $u)
             <tr>
              <td>{{$u['id']}}</td>
               <td>{{$u['nome']}}</td>
               <td>{{$u['login']}}</td>
               <td>{{$u['acesso']}}</td>
               <td>{{$u['local']}}</td>
               <td>
                 <!-- Botão de edição que abre o modal -->
                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarModal-{{ $u->id }}">
                   <i class="bi bi-pencil"></i>
                 </button>

                 @include('admin.modalEditU', ['user' => $u])
             </td>
             <td>
               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#finalizarModal{{ $u->id }}">
                 <i class="bi bi-key"></i>
               </button>    
             </td>
             <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#delModal-{{$u->id}}">
                <i class="bi bi-trash"></i>
              </button>
              
              @include('admin.modalDelU', ['user' => $u])
            </td>
             </tr>
         @endforeach
       </tbody>
     </table>
     @include('admin.modalCriarU')
     
@endsection