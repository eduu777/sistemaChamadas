<!-- Modal de criação -->
<div class="modal fade" id="delModal-{{$u->id}}" tabindex="-1" aria-labelledby="delModal-{{$u->id}}" aria-hidden="true">
    <!-- Conteúdo do modal -->
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delModal-{{$u->id}}">Tem certeza que deseja excluir o usuário <strong>{{$u->login}}</strong>?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <!-- Formulário de edição -->
                <form action="{{route('user.destroy', ['id'=>$u->id])}}" method="post">
                    @csrf
                    @method('Delete')
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Excluir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>