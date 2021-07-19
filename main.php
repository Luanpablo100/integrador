<?php
    session_start();
    include("verifica.php")
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Estudático</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel="stylesheet" href="assets/css/main-page.css">
    <link rel="shortcut icon" href="./assets/img/idea.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
</head>
<body>
    <header class="d-flex flex-column flex-md-row">
        <div>
        <h1 id="hellotext">Ola, <?php echo $_SESSION['usuario'];?></h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php" style="color:white; text-decoration: none;">Página Incial</a></li>
                <li><a href="cursos.php" style="color:white;text-decoration: none;">Cursos</a></li>
                <li><a href="logout.php"style="color:white;text-decoration: none;">Sair</a></li>
            </ul>
        </nav>
    </header>
    <main class="p-4 p-md-0">
        
        <h2 class="title-main">Cursos recomendados</h2>
        <div id="courses" class=" d-flex flex-column flex-md-row align-items-center">
            <a href="video.php">
                <div class="course mb-3 mb-md-0">
                    <img src="assets/img/linux.svg" alt="">
                    <h3>Comandos básicos do Linux</h3>
                </div>
            </a>
            <a href="video.php">
                <div class="course mb-3 mb-md-0">
                    <img src="assets/img/javascript.svg" alt="">
                    <h3>Comandos básicos do JavaScript</h3>
                </div>
            </a>
                <a href="video.php">
                <div class="course mb-3 mb-md-0">
                    <img src="assets/img/sql-server.svg" alt="">
                    <h3>Criar banco de dados SQL</h3>
                </div>
            </a>
                <a href="video.php">
                <div class="course mb-3 mb-md-0">
                    <img src="assets/img/site.svg" alt="">
                    <h3>Hospedar um site gratuitamente</h3>
                </div>
            </a>
        </div>
        <h2 class="title-main">Categorias</h2>
        <div id="categories" class="d-flex flex-column flex-md-row">
            <div class="category mb-3 mb-md-0">
                <h2>Programação</h2>
            </div>
            <div class="category mb-3 mb-md-0">
                <h2>Windows</h2>
            </div>
            <div class="category mb-3 mb-md-0">
                <h2>Redes</h2>
            </div>
            <div class="category mb-3 mb-md-0">
                <h2>Outros</h2>
            </div>
            <div class="category mb-3 mb-md-0">
                <h2>Programas</h2>
            </div>
        </div>
    </main>
    <footer>
        Estudático 2021.
    </footer>
</body>
</html>