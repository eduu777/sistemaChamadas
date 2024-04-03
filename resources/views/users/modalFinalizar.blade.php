<!-- Modal de edição -->
<div class="modal fade" id="finalizarModal{{ $c->id }}" tabindex="-1" aria-labelledby="finalizarModalLabel{{ $c->id }}" aria-hidden="true">
    <!-- Conteúdo do modal -->
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalLabel{{ $c->id }}">Editar Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <!-- Formulário de edição -->
                Deseja Finalizar o atendimento ao cliente: {{$c->nome}}?        
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <a href="{{route('cliente.finalizar', $c->id)}}"><button type="submit" class="btn btn-primary">Finalizar</button></a>
                </div>
            </div>
        </div>
    </div>
</div>