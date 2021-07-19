<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vídeo - Estudático</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel="stylesheet" href="assets/css/video.css">
    <link rel="shortcut icon" href="./assets/img/idea.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
</head>
<body>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <header class="d-flex flex-column flex-md-row">
        <div>
            <h2>Estudático</h2>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Página Inicial</a></li>
                <li><a href="cursos.php">Cursos</a></li>
                <li><a href="login.php">Perfil</a></li>
            </ul>
        </nav>
    </header>
    
    <section>
        <h1 style="margin-top: 10px; font-size:1.5rem">Comandos básicos de Javascript(Demonstração)</h1>
        <section id="video-container" class="d-flex flex-column flex-md-row">
            <div id="video-player">
                <div>
                    <video width="100%" height="" controls>
                        <source src="assets/video/exemplo.mp4" type="video/mp4">
                      </video>
                </div>
                <div>
                    <h5>Comandos básicos Javascript - Aula 1</h5>
                    <p>Por <a href="">Luan Oliveira</a></p>
                    <p>Postado em 19/04/2021 - <button>Compartilhar</button></p>
                    
                </div>

            </div>
            <div id="playlist">
                <button style="margin-left:10px;"><a href="upload.php" style="color:white;">Novo vídeo</a></button>
                <ol>
                    <li><a href="#">Aula 1 - Conhecendo a linguagem</a></li>
                    <li><a href="#">Aula 2 - O que são variáveis</a></li>
                    <li><a href="#">Aula 5 - Tipos primitivos</a></li>
                    <li><a href="#">Aula 3 - Algorítmos de Texto</a></li>
                    <li><a href="#">Aula 4 - Algorítmos Aritméticos</a></li>
                </ol>
            </div>
        </section>
       
    </section>

    <footer>
        <p>Estudático 2021.</p>
    </footer>
</body>
</html>