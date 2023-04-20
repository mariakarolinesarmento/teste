<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Solicitações</title>
</head>

<body>
  
 <div>
 <h1>Solicitações</h1>

 <form action="control/CreateSolicitacao.php" method="POST">
  
    <div>
      <label>Nome</label><br>
      <input type="text" name="nome" class="form-control">
    </div>

    <div>
      <label>Digite sua solicitação</label><br>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="solicitacoes"></textarea>
    </div>

    <div>
      <br>
      <button type="submit" class="btn btn-warning">Enviar</button>
    </div>
  </form>


</body>

</html>