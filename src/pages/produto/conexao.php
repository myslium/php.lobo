<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "marimaria";

$conn = new mysql($servername, $username, $password, $dbname);

if($conn -> connect_error){
    die("Conexão falhou, segue o erro: " .$connect_error);
}
?>