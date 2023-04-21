<?php
switch ($_REQUEST["acao"]){
    case 'cadastrar':
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    $email = $_POST["email"];

$sql = "INSERT INTO usuario (nome, senha, email) VALUES ('{$nome}', '{$senha}','{$email}')";

    $res = $conn->query($sql);

    if($res==true){
        print"<script>alert('Cadastro com sucesso');</script>";
        print"<script>location.href='?page=solicitacoes';</script>";
    }else{
        print"<script>alert('Não foi possivel cadastrar');</script>";
        print"<script>location.href='?page=solicitacoes';</script>";
    }

    break;

    case 'editar':
    break;

    case 'excluir':
    break;
}

?>