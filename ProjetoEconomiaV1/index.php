<?php
require 'connect.php';
session_start();
if (!isset($_SESSION['usuName'])) {
    header("Location: auth/login.php"); // Redireciona para o login se a sessão não estiver ativa
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="action/deslogar.php" method="POST">
         <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
</body>
</html>