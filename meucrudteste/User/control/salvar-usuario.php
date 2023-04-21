<?php
include('../../config.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$createUser = $conn->prepare('INSERT INTO usuarios (nome, email, senha) VALUES (:nome , :email , :senha)');
$createUser->execute(array(':nome'=> $nome, ':email'=> $email , ':senha' => $senha));

if($createUser == true){
    echo '<script>
    alert("Usuário Cadastro , Faca Login para entrar!");
    window.location.href="../login.php";
    </script>';
}

?>