<?php

$localhost = "127.0.0.1";
$usuario = "root";
$senha = "";
$nomeBD = "economia";

// Cria a conexão
$conn = new mysqli($localhost, $usuario, $senha, $nomeBD);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
