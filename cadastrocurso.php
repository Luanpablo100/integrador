<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Curso - Estudático</title>
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
                <a href="cursos.php">Cursos</a>
                <a href="index.php"><img src="./assets/img/idea.svg" alt="Estudático-logo" id="logo-header"></a>
            </div>
        </nav>
    </header>
    <section>
        <div id="form-div" class="centralize">
            <h1>Novo curso</h1>

            <form action="newcourse.php" method="POST" class="centralize">
                <fieldset>
                    <label for="">Nome do Curso</label>
                    <input type="text" required name="cursonome">
                </fieldset>
                <fieldset>
                    <label for="">Link da imagem</label>
                    <input type="text" required name="cursoimagem">
                </fieldset>
                <!-- <fieldset>
                    <label for="">Senha</label>
                    <input type="password" required name="userpass">
                </fieldset>
                <label for="" style="margin-top: 10px;">Perfil</label>
                <fieldset id="field-radio">
                    <input type="radio" checked name="profile" value="Aluno"> Aluno
                    <input type="radio" name="profile" value="Professor"> Educador
                </fieldset> -->
                <button>Cadastrar</button>
            </form>
        </div>
        <div id="image-div" class="centralize">
            <img src="./assets/img/novocursobanner2.png" alt="">
        </div>
    </section>
    <footer>
        <p>Estudático 2021. Desenvolvido por Luan Oliveira</p>
    </footer>
</body>
</html>