<?php
if(isset($_POST["submit"])){
    include_once('conexao.php');

    $nome = $_POST["nomeUsuario"];
    $cpf = $_POST["CPF"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];   

    $result = mysqli_query($conexao,"INSERT INTO usuarios(nome_usuario,cpf,email_usuario,senha_usuario) VALUES ('$nome','$cpf','$email','$senha')");

    if($result){
        // Redireciona para a mesma página
        header("Location: login.php");
    } else {
        echo "Erro ao cadastrar usuário.";
    }
}
?>

<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <div class="box-degrade">
        <div class="container-formulario">
            <form id="formulario" method="POST">
                <div class="text">CADASTRO</div>
                    <div class="container-inputs">
                        <input type="text" name="nomeUsuario" id="nome-usuario" placeholder="NOME" class="input" required>
                        <br><br>
                        <input type="text" name="CPF" id="CPF" class="input" placeholder="CPF" required>
                        <br><br>
                        <input type="email" name="email" id="email" placeholder="EMAIL" class="input" required>
                        <br><br>
                        <input type="password" name="senha" id="senha" placeholder="SENHA" class="input" required>
                        <br>
                        <button type="submit" name="submit" id="botao-submit" onclick="redirecionar();">CADASTRAR</button>
                        <br>
                        <p id="text-possui-conta">Já possuí uma conta? <a href="login.php">Faça o Login!</a></p>
                    </div>
            </form>
        </div>
    </div>

    <script>


        function redirecionar(){

            var valorNome = document.getElementById("nome-usuario").value;
            var valorCpf = document.getElementById("CPF").value;
            var valorEmail= document.getElementById("email").value;
            var valorSenha = document.getElementById("senha").value;

            if(valorNome == '' || valorCpf == '' || valorEmail == '' || valorSenha == ''){
                alert("Ainda existem campos para serem preenchidos")
            }
            else{
                alert("Usuário cadastrado com sucesso !")
            }
        }

    </script>
     
</body>
</html>
