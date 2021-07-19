<?php
    include('conexao.php');
    $conn = conectar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos - Estudático</title>
    <link rel="stylesheet" href="./assets/css/general.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/cursos.css">
    <link rel="shortcut icon" href="./assets/img/idea.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
</head>
<body >
    <header class="d-flex flex-column flex-md-row">
        <div>
            <h2>Estudático</h2>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Página Inicial</a></li>
                <li><a href="cursos.html">Cursos</a></li>
                <li><a href="login.php">Perfil</a></li>
            </ul>
        </nav>
    </header>
    <section id="all-course">
    <div id="headercourse">
        <h1>Todos os cursos</h1>
        <a href="cadastrocurso.php"> <button> Novo curso </button></a>
    </div>

            <?php
            
            $pagina_atual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);

            $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
    
    
            $limite_resultado = 5;
    
            $inicio = ($limite_resultado * $pagina) - $limite_resultado;
    
            $query_cursos = "SELECT id, nome, imagem FROM courses ORDER by id LIMIT $inicio, $limite_resultado";
            $result_cursos = $conn->prepare($query_cursos);
            $result_cursos->execute();
    
            if (($result_cursos) AND ($result_cursos->rowCount() != 0)){
                echo '<div class="courses d-flex flex-column flex-md-row">';
                while($rowcursos = $result_cursos->fetch(PDO::FETCH_ASSOC)) {
                    extract($rowcursos); 

                    echo '<div class="course-div  mb-3 mb-md-0">';
                        echo '<a href="video.php">';
                        echo '<img class="course-img" src="' . $imagem . '" alt="">';
                        echo '<p>' . $nome .'</p>';
                        echo "<a href='confirmarapagar.php?id=$id&nome=$nome'>Excluir</a></td>";
                        echo '</a>';
                    echo '</div>';
                }
                echo '</div>';
    
                $query_qnt_registros = "SELECT COUNT(id) AS num_result FROM courses";
                $result_qnt_registros = $conn->prepare($query_qnt_registros);
                $result_qnt_registros->execute();
                $row_qnt_registros = $result_qnt_registros->fetch(PDO::FETCH_ASSOC);
    
                $qnt_pagina = ceil($row_qnt_registros['num_result'] / $limite_resultado);
    
                $maximo_link = 2;
    
                echo '<div id="paginacao">';
                
                echo "<a href='cursos.php?page=1'>Primeira </a>";
    
                for ($pagina_anterior = $pagina - $maximo_link; $pagina_anterior <= $pagina - 1; $pagina_anterior++){
                    if($pagina_anterior >= 1){
                        echo "<a href='cursos.php?page=$pagina_anterior'>$pagina_anterior</a> ";
                    }
                }   
    
                echo "$pagina ";
    
                for($proxima_pagina = $pagina + 1; $proxima_pagina <= $pagina + $maximo_link; $proxima_pagina++) {
                    if($proxima_pagina <= $qnt_pagina){
                        echo "<a href='cursos.php?page=$proxima_pagina'>$proxima_pagina</a> ";
                    }
                }
    
                echo "<a href='cursos.php?page=$qnt_pagina'> Ultima</a>";
                echo '</div>';
            } else {
                echo "<p style='color:red;'>Erro: Cursos não encontrados!</p>";
            };
            ?>

        </div>
    </section>
    <footer>
        <p>Estudático 2021.</p>
    </footer>
</body>
</html>