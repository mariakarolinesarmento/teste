<?php
//conexao com o banco
include('../../config.php');

//recebe parametros de solicitacoes
$nome = $_POST['nome'];
$solicitacoes = $_POST['solicitacoes'];

$enviarSolicitacoes = $conn->prepare('INSERT INTO solicitacoes(nome, solicitacao) VALUES (:nome, :solicitacoes)');
$enviarSolicitacoes->execute(array(':nome'=> $nome , ':solicitacoes' => $solicitacoes));

if($enviarSolicitacoes == true){
    echo '<script>
    alert("Solicitacao enviada");
    window.location.href="../solicitacoes.php";
    </script>';
}  else {
    echo 'Erro com banco de dados';
}

?>