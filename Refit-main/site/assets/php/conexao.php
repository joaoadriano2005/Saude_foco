<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "bd_refit";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>