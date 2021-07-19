<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Estudático</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel="stylesheet" href="assets/css/homepage.css">
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
                <li><a href="cursos.php">Cursos</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>
    
    <section id="title" class="d-flex flex-column flex-md-row">
        <div id="right" class="col-12 col-md-6 p-3 p-md-5">
            <h5>A plataforma de ensino prática, pra sua implantação ser mais eficaz! <br>
                <br>
                O estudático é gratuito e oferece conteúdos sobre diversas tecnologias, como usá-las e aplica-las em situações cotidianas.
            </h5>
        </div>
        <div id="left" class="col-12 col-md-6">
            <img src="assets/img/10088.jpg" alt="" class="img-fluid">
        </div>
    </section>
    <section>
        <div id="vantagens" class="d-flex flex-column flex-md-row justify-content-center text-center align-items-center">
            <div class="vantagem mx-5 my-3 my-md-0">
                <img src="./assets/img/clock.svg" alt="" class="img-fluid">
                <h5>Rápida aprendizagem</h5>
            </div>
            <div class="vantagem mx-5 my-3 my-md-0">
                <img src="./assets/img/admin.svg" alt="" class="img-fluid">
                <h5>Aplicação simples</h5>
            </div>
            <div class="vantagem mx-5 my-3 my-md-0">
                <img src="./assets/img/zip.png" alt="" class="img-fluid">
                <h5>Conteúdo disponível para download</h5>
            </div>
        </div>
    </section>
    <h1 style="margin: 50px;" class="text-center text-md-left">Conteúdos</h1>
    <div id="carouselCourses" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="carouselCourses" data-slide-to="0" class="active"></li>
            <li data-target="carouselCourses" data-slide-to="1"></li>
            <li data-target="carouselCourses" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active text-center">
                <a href="https://www.linux.org" target="_blank"><img src="assets/img/linux (1).svg" class="img-fluid" ></a>
                <div class="carousel-caption bg-dark">
                    <p>Aplicações comuns em Linux</p>
                </div>
            </div>

            <div class="carousel-item text-center">
                <a href="https://www.mysql.com" target="_blank"><img src="assets/img/database (1).png" class="img-fluid"></a>
                <div class="carousel-caption bg-dark">   
                    <p>Comandos básicos em SQL</p>
                </div>                
            </div>

            <div class="carousel-item text-center">
                <a href="https://developer.mozilla.org/pt-BR/docs/Learn/JavaScript" target="_blank"><img src="assets/img/javascript (1).svg" class="img-fluid"></a>
                <div class="carousel-caption bg-dark">
                    <p>Programação Javascript prática</p>
                </div>
            </div>
        </div>
     </div>


    <!-- Criando controlhes do Carousel. -->
    <section>
        <div id="dispositivos" class="d-flex flex-column flex-md-row">
            <div class="mx-3"><h2>Acessível em vários dispositivos</h2></div>
            <div class="my-4 my-md-0"><img src="assets/img/laptop (1).svg" alt="" class="dispositivo img-fluid"></div>
            <div class="my-4 my-md-0"><img src="assets/img/smartphone (1).svg" alt="" class="dispositivo img-fluid"></div>
            <div class="my-4 my-md-0"><img src="assets/img/tablet (1).svg" alt="" class="dispositivo img-fluid"></div>
        </div>
    </section>
    <section id="clique-cadastrar">
        <h1 class="my-4">Clique aqui e dê início ao seu aprendizado!</h1>
        <a href="cadastro.php" id="clique-cadastrar-btn">Cadastrar-se</a>
    </section>

    <footer>
        <p>
            <a href="empresa.php">Quem somos</a> -
            <a href="upload.php">Enviar vídeo</a>
        </p>
        <p>Estudático 2021.</p>
    </footer>
</body>
</html>