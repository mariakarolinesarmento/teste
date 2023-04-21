<?php
include('../../config.php');

   if( isset($_GET['mensagem'])){
        $id = $_GET['mensagem'];
   }else{
        header("Location: ../listarSolicitacoes.php");
   }

   $del_prod = $conn->prepare('DELETE FROM solicitacoes WHERE id= :id');
   $del_prod->execute(array(':id'=>$id));  

   echo "<script>
   alert('Usuário Deletado!');
   window.location.href='../listarsolicitacoes.php';
   </script>";

?>