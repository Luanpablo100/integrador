<?php
    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_STRING);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar Apagar - Estudático</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel="stylesheet" href="assets/css/empresa.css">
    <link rel="shortcut icon" href="./assets/img/idea.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
</head>
<body>
    <header class="d-flex flex-column flex-md-row text-center">
        <h2>Deseja realmente apagar? </h2>
    </header>
    <?php
    echo "<h2> O curso <span style='color: red;'>";
    echo $nome;
    echo "</span> será apagado!</h2>";
    echo "<a href='apagar.php?id=$id'>SIM</a> | <a href='cursos.php'>NÃO</a>";
    ?>
    <footer>
        <p>Estudático 2021.</p>
    </footer>
</body>
</html>