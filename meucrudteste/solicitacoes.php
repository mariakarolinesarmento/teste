<h1>Solicitações</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
    <label>Nome</label><br>
    <input type="text" name="nome" class="form-control">
</div>
<div class="mb-3">
    <label>Digite sua solicitação</label><br>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>

<div class="mb-3"><br>
<button type="button" class="btn btn-warning">Enviar</button>
</form>