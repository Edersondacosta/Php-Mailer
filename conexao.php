<?php
$host = "localhost";
$user = "ederson";
$pass = "ederson";
$db   = "sistema";
$port = "3310";
$conn = new mysqli($host, $user, 
$pass, $db, $port);

if($conn->connect_error){
    die("Erro na conexão:".$conn->connect_error);
    }
else{
    "Conectado com sucesso";
    }
?>

