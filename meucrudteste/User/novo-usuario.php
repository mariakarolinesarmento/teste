<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>Novo Usuário</h1>
        <form action="control/salvar-usuario.php" method="POST">
            <div class="mb-3">
                <label>Nome</label><br>
                <input type="text" name="nome" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Senha</label><br>
                <input type="password" name="senha" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>E-mail</label><br>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3"><br>
                <button type="submit" class="btn btn-warning">Enviar</button>
            </div>
        </form>
        <br>
        <a href="login.php">Login</a>
    </div>
</body>

</html>