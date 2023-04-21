<?php
require('../../config.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$solicitacao = $_POST['solicitacao'];

$update_prod = $conn->prepare("UPDATE solicitacoes set nome = :nome, solicitacao = :solicitacao  WHERE id = :id");

    $update_prod->execute(
        array(
            ':id' => $id,
            ':nome' => $nome,
            ':solicitacao' => $solicitacao
        )
    );

    echo "<script>
      alert('Campos Editado Com Sucesso!');
      window.location.href='../listarsolicitacoes.php';
    </script>";


?>