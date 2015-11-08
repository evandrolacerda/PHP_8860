<div class="well">
    <form class="form-horizontal" method="post" action="">
        <fieldset>
            <legend>Registro de Produto</legend>
            <div class="form-group">	
                <label for="nome" class="col-lg-3 control-label">Produto</label>
                <div class="col-lg-4">
                    <select class="form-control input-sm" name="produto" onchange="cmdEdit()">
                        <option value="4">VAZIO</option>
                    </select>
                </div>
            </div>
            <div class="form-group">	
                <label for="nome" class="col-lg-3 control-label">Nome do Produto</label>
                <div class="col-lg-4">
                    <input type="text" class="form-control input-sm" name="nome" placeholder="Nome Completo" value="nome">
                </div>
            </div>
            <div class="form-group">	
                <label for="nome" class="col-lg-3 control-label">Nome do Produto</label>
                <div class="col-lg-4">
                    <input type="text" class="form-control input-sm" name="nome" placeholder="Nome Completo" value="nome">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-8 col-lg-offset-3">
                    <button type="reset" class="btn btn-default">Novo</button>
                    <button type="reset" class="btn btn-default">Cancelar</button>
                    <button type="reset" class="btn btn-default">Editar</button>
                    <button type="submit" name="registrar" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>