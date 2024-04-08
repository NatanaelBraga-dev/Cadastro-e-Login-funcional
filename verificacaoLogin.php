<?php 

session_start();
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
 
    include_once('conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // print_r('Email: ' . $email);
    // print_r('senha: ' . $senha);

    $sql = "SELECT * FROM usuarios WHERE email_usuario = '$email' and senha_usuario = '$senha' ";

    $result = $conexao->query($sql);

    // print_r($result);
    if(mysqli_num_rows($result) < 1){
        unset($_SESSION["email"]);
        unset($_SESSION["senha"]);
        header('Location: login.php');
    }
    else{
        $_SESSION['email'] = '$email';
        $_SESSION['senha'] = '$senha';
        header('Location: home.php');
    }
}    
else{
    header('Location: login.php');
}
?>
