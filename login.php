<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Estudático</title>
    <link rel="stylesheet" href="./assets/css/general.css">
    <link rel="stylesheet" href="./assets/css/login2.css">
    <link rel="shortcut icon" href="./assets/img/idea.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
    <?php require 'conexao.php'?>
</head>
<body>
    <header></header>
    <main class="centralize">


    <?php 
            if(isset($_SESSION['nao_autenticado'])):
            ?>
                <div class="notification is-danger">
                <p>ERRO: Usuário ou senha inválidos</p>
                </div>

            <?php 
                endif;
                unset($_SESSION['nao_autenticado']);
            ?>
        
        <form action="logon.php" method="POST" class="centralize">
            <img src="./assets/img/idea.svg" alt="">
            <h2>O conhecimento é infinito.</h2>
            <div id="inputs" class="centralize">

                <div class="input-field">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="input-field">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" required>
                </div class='input-field'>

                <button>Entrar</button>
            </div>

            <!-- <h4>Ou faça login com</h4>

            <div id="other-logins">

                <div class="other-login">
                    <img src="./assets/img/google.svg" alt="">
                </div>

                <div class="other-login">
                    <img src="./assets/img/facebook.svg" alt="">
                </div> 

            </div>
            -->
            <div id="registrarse">
                <h4>Não possui cadastro?</h4>
                <a id="registrarse-btn" href="cadastro.php">Registrar-se</a>
            </div>
        </form>
    </main>
    <footer></footer>
</body>
</html>