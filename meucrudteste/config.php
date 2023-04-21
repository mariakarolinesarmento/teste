<?php

$user  = 'root';
$host = 'localhost';
$pass = '';
$dbname = 'sistema';
$port = '3306';

try{
    $conn = new PDO('mysql:host='.$host.';dbname='.$dbname.';port='.$port.';' , $user , $pass);
} catch (PDOException $e){
    echo 'Error' . $e -> getMessage();
}


?>