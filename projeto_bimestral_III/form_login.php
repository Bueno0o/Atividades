<meta charset="UTF-8" />
<div class="modal fade" id="modal_login" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exempleModalLabel">Autenticação</h5>
                <button type="button" class="close" data-dismiss="modal" >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form name="login" method="post" action="autenticacao.php">
                <div class="modal-body">
                    <div>
                        <input type="text" name="email" placeholder="email..." class="input-control col-12" />
                    </div>
                    <div>
                        <input type="password" name="senha" placeholder="senha..." class="input-control col-12" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary col-3" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary autenticar col-8" >Autenticar</button>
                </div> 
            </form>
        </div>
    </div>
</div>