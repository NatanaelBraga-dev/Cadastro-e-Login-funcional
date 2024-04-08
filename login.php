<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login de Usuários</title>
</head>
<body>
    <div class="box-degrade">
        <div class="container-formulario">
            <form action="verificacaoLogin.php" id="formulario" method="POST">
                <div class="text">LOGIN</div>
                    <div class="container-inputs">
                        <input type="email" name="email" id="email" placeholder="EMAIL" class="input" required>
                        <br><br>
                        <input type="password" name="senha" id="senha" placeholder="SENHA" class="input" required>
                        <br>
                        <button type="submit" name="submit" id="botao-submit">ENTRAR</button>
                        <br>
                        <p id="text-nao-possui-conta">Não possuí uma conta?<a href="cadastro.php">Faça o Cadastro!</a></p>
                    </div>
            </form>
        </div>
</body>
</html>