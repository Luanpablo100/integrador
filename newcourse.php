<?php

    session_start();


    include("conexao.php");
    $conn=conectar();

    $nome = $_POST['cursonome'];
    $imagem = $_POST['cursoimagem'];
    // $panel = $_POST['profile'];
    // $panel = $_POST['profile'];
    // $panel = $_POST['profile'];
    // $panel = $_POST['profile'];
    // $panel = $_POST['profile'];


    $cadastro = $conn->prepare("INSERT INTO courses(
        nome, imagem)
    VALUES(:nome, :imagem)");

    $cadastro->bindValue(":nome", $nome);
    $cadastro->bindValue(":imagem", $imagem);
    // $cadastro->bindValue(":senha", $senha);
    // $cadastro->bindValue(":panel", $panel);

    

    $verificar=$conn->prepare("SELECT * FROM courses WHERE imagem=?");
    $verificar->execute(array($imagem));

    if($verificar->rowCount()==0){
        $cadastro->execute();
        header("Location: cursos.php");
        exit();
    }
?>