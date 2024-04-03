<!-- Modal de criação -->
<div class="modal fade" id="editarModal-{{$u->id}}" tabindex="-1" aria-labelledby="editarModal-{{$u->id}}" aria-hidden="true">
    <!-- Conteúdo do modal -->
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModal-{{$u->id}}">Editar <strong>{{$u->login}}</strong>?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <!-- Formulário de edição -->
                <form action="{{route('user.update', ['id'=>$u->id])}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required value="{{$u->nome}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Login:</label>
                        <input type="text" class="form-control" id="email" name="login" required value="{{$u->login}}">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="senha" class="form-label">Acesso:</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="acesso">
                                <option selected value="{{$u->acesso}}">{{$u->acesso}}</option>
                                <option value="admin">Admin</option>
                                <option value="recepcao">Recepção</option>
                                <option value="profissional">Profissional</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="local" class="form-label">Local:</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="local">
                                <option selected value="{{$u->local}}">{{$u->local}}</option>
                                <option value="1">Sala 1</option>
                                <option value="2">Sala 2</option>
                                <option value="3">Sala 3</option>
                                <option value="Doutor Manassés">Dr Manassés</option>
                                <option value="Recepção">Recepção</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>