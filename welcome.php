<?php 
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
</head>
<body>
    <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]);
    ?></b>. Bem-vindo ao nosso site.</h1>
    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>