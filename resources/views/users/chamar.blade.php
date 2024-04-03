@extends($extends)

@section('conteudo')
@if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif
<h2 class="text-center py-4">Fila de Clientes</h2>
<table class="table table-bordered text-center">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Prioridade</th>
        <th scope="col">Data e Hora</th>
        <th scope="col">Local</th>
        <th scope="col">Chamar</th>
        <th scope="col">Encaminhar</th>
        <th scope="col">Finalizar</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($clientes as $c)
          <tr>
            <td>{{$c['nome']}}</td>
            <td>{{$c['prioridade']}}</td>
            <td>{{$c['created_at']}}</td>
            <td>{{$c['local']}}</td>
            <td><a href="{{route ('chamada.store', ['cliente_id' => $c->id])}}"><button class="btn btn-primary"><i class="bi bi-bell"></i></button></a></td>
            <td>
              <!-- Botão de edição que abre o modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarModal{{ $c->id }}">
                <i class="bi bi-send"></i>
              </button>

             @include('users.modalEncaminhar', ['c'=>$c])
          </td>
          <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#finalizarModal{{ $c->id }}">
              <i class="bi bi-check-lg"></i>
            </button>    
            @include('users.modalFinalizar', ['c'=>$c]) 
          </td>
          </tr>
      @endforeach
    </tbody>
  </table>

  <!-- Modal -->
      @include('users.modalEncaminhar')
  <script>
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
      myInput.focus()
    })  
  </script>
@endsection