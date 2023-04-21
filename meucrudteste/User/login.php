<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>

<body style="background-color: pink;">
    <div>
        <h1>Login</h1>
        <form action="control/LoginUser.php" method="post">
            <div>
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <br>
            <div>
                <label>Senha</label>
                <input type="password" name="senha" required>
            </div>
            <br>
            <button type="submit"> Entrar </button>
        </form>
    </div>
    <p>se nao tiver conta faca seu <a href="novo-usuario.php">Cadastro</a><p>

</body>
</html>