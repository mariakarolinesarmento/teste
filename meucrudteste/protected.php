<?php

if(!isset($_SESSION)){
    session_start();
}


if (!isset($_SESSION["id"])) {
    die("Faça Login para ter acesso <a href='../user/login.php'>Fazer Login</a>");
  } 

?>