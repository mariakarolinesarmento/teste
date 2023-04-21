<?php
include('../protected.php');
include('../config.php');

$mostrarSolicitacoes = $conn->prepare('SELECT * FROM solicitacoes');
$mostrarSolicitacoes->execute();
$rowTabela = $mostrarSolicitacoes->fetchAll();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Solicitações</title>
</head>
<body>
    <div>
        <table>
            <thead>
                <th>Id</th>
                <th>Nome</th>
                <th>Solicitacoes</th>
            </thead>
            <tbody>
                <?php
                    foreach($rowTabela as $linha){
                        echo '<tr>';
                        echo "<th scope='row'>" . $linha['id'] . "</th>";
                        echo "<td>" . $linha['nome'] . "</td>";
                        echo "<td>" . $linha['solicitacao'] . "</td>";
                        echo '<td><a href=editarsolicitacoes.php?mensagem=' . $linha['id'] . ' class="btn btn-warning">Editar</a></td>';
                        echo '<td><a href=control/deletesolicitacao.php?mensagem=' . $linha['id'] . ' class="btn btn-danger">Excluir</a></td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>