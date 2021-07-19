<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Usuário - Estudático</title>
    <link rel="stylesheet" href="./assets/css/general.css">
    <link rel="stylesheet" href="./assets/css/register.css">
    <link rel="shortcut icon" href="./assets/img/idea.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
</head>
<body >
    <header>
        <nav>
            <div>
                <a href="login.php">Login</a>
                <a href="index.php"><img src="./assets/img/idea.svg" alt="Estudático-logo" id="logo-header"></a>
            </div>
        </nav>
    </header>
    <section>
        <div id="form-div" class="centralize">
            <h1>Novo Cadastro</h1>


            <?php
            if(isset($_SESSION['cadastrado'])):
            ?>

            <br>

            <div class="notification is-danger" align="center">
                    <p style="color: green">Usuário cadastrado com sucesso!</p>
            </div>
        
            <?php
                endif;
                unset($_SESSION['cadastrado']);
            ?>

            <?php
                if(isset($_SESSION['nao_cadastrado'])):
            ?>

            <br>

            <div class="notification is-danger" align="center">
                    <p style="color: red">Erro! E-mail já cadastrado.</p>
            </div>
        
            <?php
                endif;
                unset($_SESSION['nao_cadastrado']);
            ?>

            <form action="newuser.php" method="POST" class="centralize">
                <fieldset>
                    <label for="">Nome Completo</label>
                    <input type="text" required name="username">
                </fieldset>
                <fieldset>
                    <label for="">E-mail</label>
                    <input type="email" required name="useremail">
                </fieldset>
                <fieldset>
                    <label for="">Senha</label>
                    <input type="password" required name="userpass">
                </fieldset>
                <label for="" style="margin-top: 10px;">Perfil</label>
                <fieldset id="field-radio">
                    <input type="radio" checked name="profile" value="Aluno"> Aluno
                    <input type="radio" name="profile" value="Professor"> Educador
                </fieldset>
                <button>Cadastrar</button>
            </form>
        </div>
        <div id="image-div" class="centralize">
            <img src="./assets/img/Mobile login.png" alt="">
        </div>
    </section>
    <footer>
        <p>Estudático 2021.</p>
    </footer>
</body>
</html>