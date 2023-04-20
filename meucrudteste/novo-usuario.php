<h1>Novo Usuário</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
    <label>Nome</label><br>
    <input type="text" name="nome" class="form-control">
</div>
<div class="mb-3">
    <label>Senha</label><br>
    <input type="password" name="senha" class="form-control">
</div>
<div class="mb-3">
    <label>E-mail</label><br>
    <input type="email" name="Email" class="form-control">
</div>
<div class="mb-3"><br>
<button type="button" class="btn btn-warning">Enviar</button>
</form>