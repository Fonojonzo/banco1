<?php

$host = "localhost"; // nome do servidor MySQL
$user = "id20457741_usuario"; // usuário do MySQL
$pass = "7!e]c3?&n+Cf0-P6"; // senha do MySQL
$dbname = "id20457741_gamedb"; // nome do banco de dados

// Conexão com o banco de dados MySQL
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}