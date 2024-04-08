<?php
    session_start();
    if((!isset($_SESSION["email"]) == true) and (!isset($_SESSION["senha"]) == true))
    {
        unset($_SESSION["email"]);
        unset($_SESSION["senha"]);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Home</title>
</head>
<body>
    <div class="box-degrade">
        <div class="container-text">
            <h1 class="text">BEM VINDO!</h1>
        </div>
        <div class="container-button">
            <button name="botao-sair" class="botao-sair"><a href="sairSession.php" class="botao-link">SAIR</a></button>
        </div>
    </div>
</body>
</html>