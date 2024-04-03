@extends($extends)

@section('conteudo')
<div class="container mt-5 col-9">
    <h2>Adicionar Cliente</h2>
    <form action="{{route('cliente.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="local" class="form-label">Local:</label>
                <select class="form-select mb-3" aria-label="Default select example" name="local">
                    <option selected>Selecione o acesso</option>
                    <option value="1">Sala 1</option>
                    <option value="2">Sala 2</option>
                    <option value="3">Sala 3</option>
                    <option value="Doutor Manassés">Dr Manassés</option>
                </select>
            </div>
            <div class="col-6">
                <label for="local" class="form-label">Prioridade?</label>
                <select class="form-select mb-3" aria-label="Default select example" name="prioridade">
                    <option selected value="nao">Não</option>
                    <option value="sim">Sim</option>
                </select>
            </div>  
        </div> 
        <button type="submit" class="btn btn-primary">Adicionar Cliente</button>
    </form>
</div>

@endsection