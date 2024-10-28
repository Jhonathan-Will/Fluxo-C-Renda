<?php
session_start();
require '../connect.php';
$user = $_POST['usuName'];
$pass = $_POST['usuSenha'];

$stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuName = ? AND usuSenha = ?");
$stmt->bind_param("ss", $user, $pass); // "ss" indica que estamos passando duas strings
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $_SESSION['usuName'] = $user;
    $_SESSION['usuSenha'] = $pass;
    header('location: ../index.php');
} else {
    unset($_SESSION['usuName']);
    unset($_SESSION['usuSenha']);
    echo "<script> alert('Login ou senha incorretos!'); </script>";
    header('location: ../auth/login.php');
}

$stmt->close(); // Fecha a declaração preparada
$conn->close(); // Fecha a conexão com o banco
?>