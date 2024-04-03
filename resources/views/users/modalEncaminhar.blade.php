<!-- Modal de edição -->
@if (empty($clientes))
<div class="modal fade" id="editarModal{{ $c->id }}" tabindex="-1" aria-labelledby="editarModalLabel{{ $c->id }}" aria-hidden="true">
    <!-- Conteúdo do modal -->
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalLabel{{ $c->id }}">Editar Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <!-- Formulário de edição -->
                <form action="{{route('cliente.encaminhar', $c->id)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <label for="local" class="form-label">Para onde deseja encaminhar {{$c['nome']}}?</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="local">
                            <option selected>Selecione o Local</option>
                            <option value="1">Sala 1</option>
                            <option value="2">Sala 2</option>
                            <option value="3">Sala 3</option>
                            <option value="Doutor Manassés">Dr Manassés</option>
                        </select>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                          </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endif